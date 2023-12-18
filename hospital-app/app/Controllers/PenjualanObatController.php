<?php
namespace App\Controllers;
use App\Models\PenjualanObat;

class PenjualanObatController extends BaseController {
    public function index() {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        $model = model(PenjualanObat::class);
        $data['penjualanObat'] = $model->getDataObat();
        return view('penjualanObat', $data);
    }

    public function jualObat() {
        $model = model(PenjualanObat::class);

        $id_obat = $this->request->getPost('id_obat');
        $nama_obat = $this->request->getPost('nama_obat');
        $jumlah_awal = $this->request->getPost('jumlah_awal');
        $jumlah_request = $this->request->getPost('jumlah_request');

        if (empty($id_obat) || empty($nama_obat) || empty($jumlah_awal) || empty($jumlah_request) || !is_numeric($jumlah_request)) {
            return redirect()->to('/penjualanObat')->with('error', 'Invalid Data');
        }

        $json_data = [
            'nama' => $nama_obat,
            'jumlah' => $jumlah_request
        ];

        // API Consume
        $api_url = 'https://obat-tst.000webhostapp.com/pemesananAPI/tsthospital/18221105';
        $response = $model->sendPostRequest($api_url, $json_data);

        $http_status = $response->getStatusCode();

        if (strpos($http_status, '200') !== false) {
            $jumlah_akhir = $jumlah_awal + $jumlah_request;
            $data = [
                'jumlah' => $jumlah_akhir
            ];
            $model->updateDataObat($id_obat, $data);

            // Update the Request Table
            $requestData = [
                'jumlah_request' => $jumlah_request,
                'total_harga' => $jumlah_request*10,
                'status_request' => 'Diterima'
            ];

            $model->saveDataRequest($requestData);

            return redirect()->to('/penjualanObat');
        } elseif (strpos($http_status, '204') !== false) {
            $requestData = [
                'jumlah_request' => $jumlah_request,
                'total_harga' => $jumlah_request*10,
                'status_request' => 'Ditolak'
            ];

            $model->saveDataRequest($requestData);

            return redirect()->to('/');
        } else {
            return redirect()->to('/about');
        }
    }
}
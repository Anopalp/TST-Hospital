<?php
namespace App\Controllers;
use App\Models\RequestObat;

class RequestObatController extends BaseController {
    public function index() {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        $model = model(RequestObat::class);
        $data['requestObat'] = $model->getDataObat();
        return view('requestObat', $data);
    }

    public function requestObat() {
        $model = model(RequestObat::class);

        $id_obat = $this->request->getPost('id_obat');
        $nama_obat = $this->request->getPost('nama_obat');
        $harga = $this->request->getPost('harga');
        $jumlah_awal = $this->request->getPost('jumlah_awal');
        $jumlah_request = $this->request->getPost('jumlah_request');

        if (empty($id_obat) || empty($nama_obat) || empty($harga) || empty($jumlah_awal) || empty($jumlah_request) || !is_numeric($jumlah_request)) {
            return redirect()->to('/requestObat')->with('error', 'Invalid Data');
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
                'nama_obat' => $nama_obat,
                'jumlah_request' => $jumlah_request,
                'total_harga' => $jumlah_request * $harga,
                'status_request' => 'Diterima'
            ];

            $model->saveDataRequest($requestData);

            return redirect()->to('/riwayatRequestObat');
        } elseif (strpos($http_status, '204') !== false) {
            $requestData = [
                'nama_obat' => $nama_obat,
                'jumlah_request' => $jumlah_request,
                'total_harga' => $jumlah_request * $harga,
                'status_request' => 'Ditolak'
            ];

            $model->saveDataRequest($requestData);

            return redirect()->to('/riwayatRequestObat');
        } else {
            return redirect()->to('/requestObat');
        }
    }
}
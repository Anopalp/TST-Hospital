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
        $jumlah_awal = $this->request->getPost('jumlah_awal');
        $jumlah_jual = $this->request->getPost('jumlah_jual');
        $threshold = $this->request->getPost('threshold');

        if (empty($id_obat) || empty($jumlah_awal) || empty($jumlah_jual) || !is_numeric($jumlah_jual) || empty($threshold)) {
            return redirect()->to('/penjualanObat')->with('error', 'Invalid Data');
        }

        $jumlah_akhir = $jumlah_awal - $jumlah_jual;

        if ($jumlah_akhir < 0) {
            return redirect()->to('/penjualanObat')->with('error', 'Invalid Data');
        }

        // if ($jumlah_akhir < $threshold) {
            
        // }

        $data = [
            'jumlah' => $jumlah_akhir
        ];

        $model->updateDataObat($id_obat, $data);

        return redirect()->to('/penjualanObat');
    }
}
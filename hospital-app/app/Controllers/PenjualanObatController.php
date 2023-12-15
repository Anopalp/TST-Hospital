<?php
namespace App\Controllers;
use App\Models\PenjualanObat;

class PenjualanObatController extends BaseController {
    public function index() {
        $model = model(PenjualanObat::class);
        $data['penjualanObat'] = $model->getDataObat();
        return view('penjualanObat', $data);
    }

    public function jualObat() {
        $model = model(PenjualanObat::class);

        $id_obat = $this->request->getPost('id_obat');
        $jumlah = $this->request->getPost('jumlah');

        if (empty($id_obat) || empty($jumlah) || !is_numeric($jumlah)) {
            return redirect()->to('/penjualanObat')->with('error', 'Invalid Data');
        }

        $data = [
            'jumlah' => $jumlah
        ];

        $model->updateDataObat($id_obat, $data);

        return redirect()->to('/penjualanObat');
    }
}
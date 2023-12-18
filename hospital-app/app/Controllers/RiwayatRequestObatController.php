<?php
namespace App\Controllers;
use App\Models\RiwayatRequestObat;

class RiwayatRequestObatController extends BaseController {
    public function index() {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        $model = model(RiwayatRequestObat::class);
        $data['riwayatRequest'] = $model->getDataRiwayatRequest();
        
        return view('riwayatRequestObat', $data);
    }
}
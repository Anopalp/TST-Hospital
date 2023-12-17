<?php
namespace App\Controllers;
use App\Models\RiwayatRegistrasi;

class RiwayatRegistrasiController extends BaseController {
    public function index() {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }
        
        $model = model(RiwayatRegistrasi::class);
        $data['riwayatRegistrasi'] = $model->getDataRiwayatRegistrasi();
        return view('riwayatRegistrasi', $data);
    }
}
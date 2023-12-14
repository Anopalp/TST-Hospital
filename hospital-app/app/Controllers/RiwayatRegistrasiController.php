<?php
namespace App\Controllers;
use App\Models\RiwayatRegistrasi;

class RiwayatRegistrasiController extends BaseController {
    public function index() {
        $model = model(RiwayatRegistrasi::class);
        $data['riwayatRegistrasi'] = $model->getDataRiwayatRegistrasi();
        return view('riwayatRegistrasi', $data);
    }
}
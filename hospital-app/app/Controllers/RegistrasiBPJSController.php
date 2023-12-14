<?php
namespace App\Controllers;
use App\Models\RegistrasiBPJS;

class RegistrasiBPJSController extends BaseController {
    public function index() {
        return view('registrasiBPJS');
    }
    public function register_bpjs_action() {
        $nama = $this->request->getPost('nama');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $golongan_darah = $this->request->getPost('golongan_darah');
        $id_bpjs = $this->request->getPost('id_bpjs');

        $model = new RegistrasiBPJS();

        $data = [
            'id_pasien' => "1",
            'nama_pasien' => $nama,
            'tanggal_lahir' => $tgl_lahir,
            'golongan_darah' => $golongan_darah,
            'asuransi' => "BPJS",
            'id_bpjs' => $id_bpjs,
            'kelas_rawat' => "IA",
            'pj' => NULL,
            'telp_pj' => NULL
        ];

        $model->saveDataRegistrasi($data);

        return redirect()->to('/riwayatRegistrasi');
    }
}
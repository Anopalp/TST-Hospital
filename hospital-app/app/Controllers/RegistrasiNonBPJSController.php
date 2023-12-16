<?php
namespace App\Controllers;
use App\Models\RegistrasiNonBPJS;

class RegistrasiNonBPJSController extends BaseController {
    public function index() {
        return view('registrasiNonBPJS');
    }
    public function register_non_bpjs_action() {
        $nama = $this->request->getPost('nama');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $golongan_darah = $this->request->getPost('golongan_darah');
        $pj = $this->request->getPost('pj');
        $telp_pj = $this->request->getPost('telp_pj');

        $model = new RegistrasiNonBPJS();

        $data = [
            'nama_pasien' => $nama,
            'tanggal_lahir' => $tgl_lahir,
            'golongan_darah' => $golongan_darah,
            'asuransi' => "Non BPJS",
            'id_bpjs' => NULL,
            'kelas_rawat' => NULL,
            'pj' => $pj,
            'telp_pj' => $telp_pj
        ];

        $model->saveDataRegistrasi($data);

        return redirect()->to('/riwayatRegistrasi');
    }
}
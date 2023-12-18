<?php
namespace App\Controllers;
use App\Models\RegistrasiBPJS;

class RegistrasiBPJSController extends BaseController {
    public function index() {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        return view('registrasiBPJS');
    }

    public function register_bpjs_action() {
        $nama = $this->request->getPost('nama');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $golongan_darah = $this->request->getPost('golongan_darah');
        $id_bpjs = $this->request->getPost('id_bpjs');

        if (!$nama || !$tgl_lahir || !$golongan_darah || !$id_bpjs) {
            return redirect()->to('/registrasiBPJS');
        }

        // API Consume
        $api_url = 'https://bpjs-tst.000webhostapp.com/api/hospitaltst/test1234/peserta/' . $id_bpjs;

        $context = stream_context_create(['http' => ['ignore_errors' => true]]);
        file_get_contents($api_url, false, $context);
        $http_status = $http_response_header[0];

        if (strpos($http_status, '404') !== false || strpos($http_status, '500') !== false) {
            return redirect()->to('/registrasiBPJS');
        }
        
        $json_data = file_get_contents($api_url);
        $decode_data = json_decode($json_data, true);

        $peserta_data = $decode_data['peserta'];

        if ($peserta_data['no_kartu'] != $id_bpjs || $peserta_data['nama'] != $nama || $peserta_data['tanggal_lahir'] != $tgl_lahir) {
            return redirect()->to('/registrasiBPJS');
        }

        $model = new RegistrasiBPJS();

        $data = [
            'nama_pasien' => $nama,
            'tanggal_lahir' => $tgl_lahir,
            'golongan_darah' => $golongan_darah,
            'asuransi' => "BPJS",
            'id_bpjs' => $id_bpjs,
            'kelas_rawat' => $peserta_data['kelas'],
            'pj' => null,
            'telp_pj' => null
        ];

        $model->saveDataRegistrasi($data);

        return redirect()->to('/riwayatRegistrasi');
    }
}
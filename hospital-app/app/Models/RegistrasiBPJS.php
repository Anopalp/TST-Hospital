<?php
namespace App\Models;
use CodeIgniter\Model;

class RegistrasiBPJS extends Model {
    public function getMaxId() {
        $db = \Config\Database::connect();
        $builder = $db->table('registrasi');
        $builder->selectMax('id_pasien');
        $query = $builder->get();

        $result = $query->getRow();
        $maxId = $result->id_pasien;

        return ($maxId !== null) ? $maxId + 1 : 1;
    }

    public function saveDataRegistrasi($data) {
        $data['id_pasien'] = $this->getMaxId();

        $db = \Config\Database::connect();
        $builder = $db->table('registrasi');
        $builder->insert($data);
        return $db->insertID();
    }
}
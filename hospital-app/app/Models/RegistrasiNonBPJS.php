<?php
namespace App\Models;
use CodeIgniter\Model;

class RegistrasiNonBPJS extends Model {
    public function saveDataRegistrasi($data) {
        $db = \Config\Database::connect();
        $builder = $db->table('registrasi');
        $builder->insert($data);
        return $db->insertID();
    }
}
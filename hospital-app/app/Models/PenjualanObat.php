<?php
namespace App\Models;
use CodeIgniter\Model;

class PenjualanObat extends Model {
    protected $table = 'obat';
    public function getDataObat() {
        return $this->findAll(1000);
    }

    public function updateDataObat($id, $data) {
        $db = \Config\Database::connect();
        $builder = $db->table('obat');
        $builder->where('id_obat', $id);
        $builder->update($data);
    }
}
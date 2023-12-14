<?php
namespace App\Models;
use CodeIgniter\Model;

class RiwayatRegistrasi extends Model {
    protected $table = 'registrasi';
    public function getDataRiwayatRegistrasi() {
        return $this->findAll(1000);
    }
}
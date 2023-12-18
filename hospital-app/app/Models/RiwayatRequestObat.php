<?php
namespace App\Models;
use CodeIgniter\Model;

class RiwayatRequestObat extends Model {
    protected $table = 'request';
    public function getDataRiwayatRequest() {
        return $this->findAll(1000);
    }
}
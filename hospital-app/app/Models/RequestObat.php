<?php
namespace App\Models;
use CodeIgniter\Model;

class RequestObat extends Model {
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

    public function sendPostRequest($url, $data) {
        $client = \Config\Services::curlrequest();
        return $client->request('POST', $url, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'json' => $data,
        ]);
    }

    public function getMaxId() {
        $db = \Config\Database::connect();
        $builder = $db->table('request');
        $builder->selectMax('id_request');
        $query = $builder->get();

        $result = $query->getRow();
        $maxId = $result->id_request;

        return ($maxId !== null) ? $maxId + 1 : 1;
    }

    public function saveDataRequest($data) {
        $data['id_request'] = $this->getMaxId();

        $db = \Config\Database::connect();
        $builder = $db->table('request');
        $builder->insert($data);
        return $db->insertID();
    }
}
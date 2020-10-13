<?php

namespace App\Models;

use CodeIgniter\Model;

class PenulisModel extends Model
{
    protected $table      = 'penulis';
    protected $primaryKey = 'idpenulis';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'email', 'kota', 'no_telp', 'kota', 'alamat'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getPenulis($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->penulisModel->where(['idpenulis' => $id])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'idadmin';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'password', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAdmin($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->adminModel->where(['idadmin' => $id])->first();
    }
}

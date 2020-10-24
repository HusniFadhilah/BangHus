<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table      = 'post';
    protected $primaryKey = 'idpost';

    protected $returnType     = 'array';

    protected $allowedFields = ['isi_post'];

    protected $useTimestamps = true;
    protected $createdField  = 'tgl_insert';
    protected $updatedField  = 'tgl_update';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // public function getPost($id = false)
    // {
    //     if ($id === false) {
    //         return $this->findAll();
    //     }

    //     return $this->postModel->where(['idpost' => $id])->first();
    // }
}

<?php

namespace App\Controllers;

use App\Models\PenulisModel;

class Penulis extends BaseController
{
    public function __construct()
    {
        $this->penulisModel = new PenulisModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Penulis',
            'penulis' => $this->penulisModel->getPenulis()
        ];
        return view('admin/penulis/penulis_data', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Penulis',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/penulis/penulis_form_add', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'email' => 'required',
            'no_telp' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/penulis/add')->withInput();
        }
        $this->penulisModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'kota' => $this->request->getVar('kota'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        return redirect()->to('/penulis');
    }
}

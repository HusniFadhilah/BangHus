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

    public function data()
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
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'konfpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'konfirmasi password harus diisi.',
                    'matches' => 'konfirmasi password harus sama dengan password'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'valid_email' => 'harus diisi dengan email valid'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No. HP harus diisi.'
                ]
            ],
            'kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/penulis/add')->withInput();
        }
        $this->penulisModel->save([
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'kota' => $this->request->getVar('kota'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        sweetalert('Penulis berhasil ditambahkan', 'success', 'Berhasil!');

        return redirect()->to('/penulis');
    }

    public function delete($id)
    {
        $this->penulisModel->delete($id);
        sweetalert('Penulis berhasil dihapus', 'success', 'Berhasil!');
        return redirect()->to('/penulis');
    }
}

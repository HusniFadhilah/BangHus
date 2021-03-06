<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AuthAdmin extends BaseController
{
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        check_already_login();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('admin/authadmin/login', $data);
    }

    public function login()
    {
        if (!$this->validate([
            'email' => [
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
        ])) {
            return redirect()->to('/authadmin')->withInput();
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $admin = $this->adminModel->where('email', $email)->first();
        if ($admin) {
            if ($admin["password"] !== md5($password)) {
                sweetalert('Maaf password Anda salah', 'error', 'Gagal!');
                return redirect()->to('/authadmin')->withInput();
            } else {
                $sessData = [
                    'email' => $admin["email"],
                    'idadmin' => $admin["idadmin"],
                    'isLoggedIn' => TRUE
                ];

                session()->set($sessData);

                return redirect()->to('/admin');
            }
        } else {
            sweetalert('Maaf akun Anda tidak terdaftar', 'error', 'Gagal!');
            return redirect()->to('/authadmin')->withInput();
        }
    }

    public function logout()
    {
        session()->remove('email');
        session()->remove('idadmin');
        session()->remove('isLoggedIn');
        sweetalert('Sesi berakhir. Kamu telah berhasil logout!', 'info', 'Info!');
        return redirect()->to('/authadmin');
    }
}

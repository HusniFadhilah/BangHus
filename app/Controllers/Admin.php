<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        $user_session = session()->has('idadmin');
        if (!($user_session)) {
            return redirect()->to('/auth');
        }
        $this->adminModel = new AdminModel();
        $data = [
            'user' => $this->adminModel->where('email', session()->get('email'))->first()
        ];
        return view('admin/dashboard/index', $data);
    }
}

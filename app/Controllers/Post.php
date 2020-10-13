<?php

namespace App\Controllers;

use App\Models\PostModel;

class Post extends BaseController
{
    protected $postModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Artikel',
            'post' => $this->postModel->getPost()
        ];

        return view('public/post/post', $data);
    }

    public function detail($id)
    {

        $data = [
            'title' => $id,
            'post' => $this->postModel->getPost($id)
        ];

        // jika artikel tidak ada di tabel
        if (empty($data['post'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        return view('public/post/single-post', $data);
    }
}

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
        $post = $this->postModel->findAll();

        $data = [
            'title' => 'Artikel',
            'post' => $post
        ];

        return view('public/post/post', $data);
    }

    //--------------------------------------------------------------------

}

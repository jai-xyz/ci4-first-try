<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        // arraw $data with key and value for title and content are specified here on the controller
        // before passing to view. 
        // call the $data after the echo view('header', -here-)
        $data = [
            'meta_title' => 'CI 4 Introduction',
            'title' => 'CI 4 | Blog list',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;

        // echo view('partials/header', $data); 
        return view('blog', $data);
        // echo view('partials/footer');
    }

    public function post()
    {
        $data = [
            'meta_title' => 'CI 4 Blog | Single Post',
            'title' => 'Blog | Single Post',
        ];
        // echo view('partials/header',);
        return view('single_post', $data);
        // echo view('partials/footer');
    }

} 

<?php

namespace App\Controllers;

use App\Models\BlogModel;
use PDO;

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

    public function new()
    {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create new post',
            'popup' => null,
        ];

        if($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $model->save($_POST);

            if(!$model){
                $data = [
                    'popup' => 'insert failed',
                ];
            }else {
                $data = [
                    'popup' => 'insert success',
                ];
            }

        }
 
        return view('new_post', $data);
    }

} 

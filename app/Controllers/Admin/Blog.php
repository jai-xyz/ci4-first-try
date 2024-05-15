<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h2>List of blogs</h2>';
    }

    public function createNew()
    {
        return view('create_blog.php');
    }

    public function saveBlog()
    {
     echo '<pre>';
     print_r($_POST);
     echo '</pre>';
    }



} 

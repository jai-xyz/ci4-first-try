<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo '<h2>This is user page.</h2>';
    }

    public function getAllUsers()
    {
        echo '<h2>This is the list of all users.</h2>';
    }


} 

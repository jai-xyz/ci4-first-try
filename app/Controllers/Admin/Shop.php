<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo '<h2>This is Admin Shop</h2>';
    }

    public function product($type, $id)
    {
       echo '<h2>This is an product from Admin Side: '.$type.' with an id: '.$id.' </h2>';
    }


} 

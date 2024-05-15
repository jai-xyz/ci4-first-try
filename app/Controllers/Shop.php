<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product($type = 'peripherals', $id = 'mouse')
    {
       echo '<h2>This is a product: '.$type.' with an id: '.$id.' </h2>';
    }


} 

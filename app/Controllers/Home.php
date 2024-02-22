<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //die("Hello world");
        return view('welcome_message');
    }
}

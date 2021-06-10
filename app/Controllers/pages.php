<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return view('welcome_messege');
    }
    public function view($page = 'home')
    {
    }
}

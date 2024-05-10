<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Pagos extends BaseController
{
    public function index(): string
    {   
        return view('templates/header')
        . view('pagos')
        . view('templates/footer');
    }
}

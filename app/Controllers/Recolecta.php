<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Recolecta extends BaseController
{
    public function index(): string
    {   
        return view('templates/header')
        . view('recolecta')
        . view('templates/footer');
    }
}

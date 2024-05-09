<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class OrdenCompra extends BaseController
{
    public function index(): string
    {   
        return view('templates/header')
        . view('orden-compra',[
            'producto' => 'Home',
            'cantidad' => 'Hello World',
            'precio' => 'hudias'
        ])
        . view('templates/footer');
        
    }
}

<?php

namespace App\Controllers;

class OrdenCompra extends BaseController
{
    public function index(): string
    {
        return view('orden-compra', [
            'producto' => 'Laptop',
            'cantidad' => 1,
            'precio' => 1000
        ]);
    }
}

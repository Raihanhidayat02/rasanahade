<?php

namespace App\Controllers;

class ReturnController extends BaseController
{
    public function menu(): string
    {
        return view('auth/menu');
    }

    public function order(): string
    {
        return view('auth/order');
    }

    public function promo(): string
    {
        return view('auth/promo');
    }
}

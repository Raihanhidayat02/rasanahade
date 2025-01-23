<?php

namespace App\Controllers;

class ReturnController extends BaseController
{
    public function menu(): string
    {
        // Dapatkan instance database
        $db = \Config\Database::connect();

        // Buat query manual untuk mengambil data menu
        $query = $db->query("SELECT * FROM menu");

        // Ambil hasil query sebagai array
        $menuItems = $query->getResultArray();

        // Kirim data ke view
        $data = [
            'menuItems' => $menuItems,
        ];

        return view('auth/menu', $data);
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

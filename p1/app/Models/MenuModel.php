<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu'; // Nama tabel sesuai dengan database
    protected $primaryKey = 'id'; // Primary key sesuai dengan database
    protected $allowedFields = ['name', 'price', 'image_url']; // Kolom yang diizinkan untuk operasi massal
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $allowedFields = ['username', 'email', 'password', 'role'];
}

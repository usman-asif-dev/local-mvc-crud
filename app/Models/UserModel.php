<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'mvc_crud';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = false;
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table = 'profile';

    protected $allowedFields = ['id','hp','picture'];
}
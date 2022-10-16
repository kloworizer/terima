<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoTerimaModel extends Model
{
    protected $table = 'foto_terima';

    protected $allowedFields = ['id_terima', 'file_foto', 'caption'];
}
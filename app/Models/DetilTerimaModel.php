<?php

namespace App\Models;

use CodeIgniter\Model;

class DetilTerimaModel extends Model
{
    protected $table = 'detil_terima';

    protected $allowedFields = ['id_terima', 'uraian', 'jumlah', 'satuan'];
}
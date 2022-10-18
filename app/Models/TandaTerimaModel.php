<?php

namespace App\Models;

use CodeIgniter\Model;

class TandaTerimaModel extends Model
{
    protected $table = 'tanda_terima';

    protected $allowedFields = ['id','no_terima', 'id_pengirim', 'id_penerima', 'tanggal', 'nama_pengirim', 'email_pengirim', 'hp_pengirim', 'keterangan', 'status', 'replace_id'];
}
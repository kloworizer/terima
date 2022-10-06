<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

class Terima extends BaseController
{
    public function index()
    {
        $data['headerTitle'] = 'Buat Tanda Terima';
        $data['logButton'] = 'fa-solid fa-user';
        $data['logUrl'] = '/profil';

        $tandaTerima = model(TandaTerimaModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'nama_pengirim' => 'required',
            'email_pengirim' => 'required|valid_email',
            'hp_pengirim' => 'numeric',
        ])) {
            $tandaTerima->insert([
                'nama_pengirim' => $this->request->getPost('nama_pengirim'),
                'email_pengirim' => $this->request->getPost('email_pengirim'),
                'hp_pengirim' => $this->request->getPost('hp_pengirim'),
                'keterangan' => $this->request->getPost('keterangan'),
                'status' => '2',
                'tanggal' => Time::now('Asia/Jakarta', 'id_ID'),
            ]);
        }

        return view('tambah', $data);
    }
}

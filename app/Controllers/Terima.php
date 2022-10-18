<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use Irsyadulibad\DataTables\DataTables;

class Terima extends BaseController
{
    public function tambah()
    {
        $data['headerTitle'] = 'Buat Tanda Terima';
        $data['logButton'] = 'fa-solid fa-user';
        $data['logUrl'] = '/profil';

        $tandaTerima = model(TandaTerimaModel::class);
        $detilTerima = model(DetilTerimaModel::class);
        $FotoTerima = model(FotoTerimaModel::class);

        if ($this->request->getMethod() === 'post') {

            if (!$this->validate([
                'nama_pengirim' => 'required',
                'email_pengirim' => 'required|valid_email',
                'hp_pengirim' => 'required|numeric',
            ])) {
                return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
            } else {

                $db = db_connect();

                $queryMaxNo = $db->query('select cast(max(left(no_terima,5)) as unsigned) no_terima from tanda_terima');
                $maxNo = $queryMaxNo->getRow()->no_terima;
                $maxNo = str_pad($maxNo + 1,5,"0",STR_PAD_LEFT);
                $maxNo = strval($maxNo) . "/" . strval(date('Y'));

                $tandaTerima->insert([
                    'no_terima' => $maxNo,
                    'nama_pengirim' => $this->request->getPost('nama_pengirim'),
                    'email_pengirim' => $this->request->getPost('email_pengirim'),
                    'hp_pengirim' => $this->request->getPost('hp_pengirim'),
                    'id_penerima' => auth()->id(),
                    'keterangan' => $this->request->getPost('keterangan'),
                    'status' => '2',
                    'tanggal' => Time::now('Asia/Jakarta', 'id_ID'),
                ]);

                $insert_id = $tandaTerima->getInsertID();

                if ($this->request->getPost('nama_barang')) {
                    for ($i = 0; $i < count($this->request->getPost('nama_barang')); $i++) {

                        $namaBarang = $this->request->getPost('nama_barang');
                        $jumlahBarang = $this->request->getPost('jumlah_barang');
                        $satuanBarang = $this->request->getPost('satuan_barang');

                        $detilTerima->insert([
                            'id_terima' => $insert_id,
                            'uraian' => $namaBarang[$i],
                            'jumlah' => $jumlahBarang[$i],
                            'satuan' => $satuanBarang[$i],
                        ]);
                    }
                }

                if ($this->request->getFileMultiple('images')) {

                    foreach ($this->request->getFileMultiple('images') as $file) {
                        if ($file->isValid()) {
                            $newName = $file->getRandomName();
                            $file->move(WRITEPATH . 'uploads', $newName);
                            $FotoTerima->insert([
                                'id_terima' => $insert_id,
                                'file_foto' => $newName,
                            ]);
                        }
                    }
                }
                
                session()->setFlashdata('success', 'Tanda terima berhasil dibuat.');
                return redirect('/');
            }
        }

        return view('tambah', $data);
    }

    public function riwayat($userId)
    {
        return DataTables::use('tanda_terima')
            ->where(['id_penerima' => $userId])
            ->select('id, no_terima, tanggal, nama_pengirim, keterangan, status')
            ->make();
    }

    public function lihat($id)
    {
        $data['headerTitle'] = 'Tanda Terima';
        $data['logButton'] = 'fa-solid fa-user';
        $data['logUrl'] = '/profil';

        $tandaTerima = model(TandaTerimaModel::class);
        $detilTerima = model(DetilTerimaModel::class);
        $FotoTerima = model(FotoTerimaModel::class);

        return view('lihat', $data);
    }
}

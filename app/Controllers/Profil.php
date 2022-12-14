<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data['headerTitle'] = 'Profil';
        $data['logButton'] = 'fa-solid fa-user';
        $data['logUrl'] = '/profil';

        $profil = model(ProfilModel::class);

        $dataProfil = $profil->find(auth()->id());

        if ($dataProfil) {
            $data['hp'] = $dataProfil['hp'];
        } else {
            $data['hp'] = '';
        }


        return view('profil', $data);
    }

    public function update()
    {
        $profil = model(ProfilModel::class);

        if ($this->request->getPost()) {

            if (!$this->validate([
                'hp' => 'required|numeric',
            ])) {
                return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
            } else {
                if ($profil->find(auth()->id())) {
                    $profil->save([
                        'id' => auth()->id(),
                        'hp' => $this->request->getPost('hp')
                    ]);
                } else {
                    $profil->insert([
                        'id' => auth()->id(),
                        'hp' => $this->request->getPost('hp')
                    ]);
                }

                session()->setFlashdata('success', 'Profil tersimpan.');
                return redirect()->to('profil');
            }
        }
    }
}

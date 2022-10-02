<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data['headerTitle'] = 'Profil';
        $data['logButton'] = 'fa-solid fa-user';
        
        $data['logUrl'] = '/profil';

        return view('profil', $data);
    }
}

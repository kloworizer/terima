<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['headerTitle'] = 'Terima - Home';

        if (! auth()->loggedIn()) {
            $data['logButton'] = 'fa-solid fa-sign-in';
            $data['logUrl'] = '/login';

            return view('home', $data);
        }else{
            $data['logButton'] = 'fa-solid fa-user';
            $data['logUrl'] = '/profil';

            return view('homeLogged', $data);
        }
    }
}

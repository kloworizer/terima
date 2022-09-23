<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['headerTitle'] = 'Terima';
        return view('home', $data);
    }
}

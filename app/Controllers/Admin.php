<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index() 
    {
        $data = [ 'judul' => 'Dashboard Admin',
            'page' => 'v_admin',
        ];
        return view('v_template_back_end', $data);
    }
}

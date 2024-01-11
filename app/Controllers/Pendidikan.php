<?php

namespace App\Controllers;

use App\Models\ModelPendidikan;

class Pendidikan extends BaseController
{
    public function __construct() 
    {
        $this->ModelPendidikan = new ModelPendidikan();
    }
    public function index()
    {
        $data = [ 'judul' => 'Pendidkan',
            'page' => 'v_pendidikan',
            'pendidikan' =>  $this->ModelPendidikan->AllData(),
        ];
        return view('v_template_back_end', $data);
    }

    public function InsertData()
    {
        $data = [
            'pendidikan'=> $this->request->getPost('pendidikan'),
        ];
        session()->setFlashdata('insert', 'Data Berhasil Ditambahkan !!');
        $this->ModelPendidikan->InsertData($data);
        return redirect()->to('Pendidikan');
    }
}

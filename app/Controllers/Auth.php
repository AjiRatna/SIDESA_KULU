<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct() {
        $this->ModelAuth = new ModelAuth();
    }
    public function index()
    {
        $data = [ 'judul' => 'Login', 
    ];
    return view('v_login', $data);
    }

    public function Login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!!'
                ]
                ],
                'level' => [
                    'label' => 'level',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong !!!!'
                    ]
                    ],
               'password' => [
                    'label' => 'password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong !!!!'
                    ]
                ],     
        ])){
            $username = $this->request->getPost('username');
            $level = $this->request->getPost('level');
            $password = $this->request->getPost('password');
            
            if($level == 1){
                $cek =  $this->ModelAuth->LoginUser($username, $password, $level);
                $data = $cek->getRowArray();
                // dd($cek);
                if ($cek->getNumRows() > 0){
                    session()->set('level', $level);
                    session()->set('nama_user', $data['nama_user']);
                    session()->set('foto', $data['foto']);
                    return redirect()->to('Admin');
                }else{
                    session()->setFlashdata('pesan', 'Login Gagal, Username Atau Password salah');
                    return redirect()->to('Auth/index');
                }
            }elseif($level == 2){
                $cek =  $this->ModelAuth->LoginUser($username, $password, $level);
                $data = $cek->getRowArray();
                //dd($cek);
                if ($cek->getNumRows() > 0){
                    session()->set('level', $level);
                    session()->set('nama_user', $data['nama_user']);
                    session()->set('foto', $data['foto']);
                    return redirect()->to('Admin');
                }else{
                    session()->setFlashdata('pesan', 'Login Gagal, Username Atau Password salah');
                    return redirect()->to('Auth/index');
                }
            }elseif($level == 3){

            }
        }else{
            return redirect()->to('Auth/index')->withInput();
        }
    }
    public function LogOut(){
        session()->remove('level');
        session()->remove('nama_user');
        session()->remove('password');
        return redirect()->to('Auth/index');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class  ModelAuth extends Model
{
    public function LoginUser($username, $password, $level)
    {
        return $this->db->table('tbl_user')
        ->where([
         'username' =>$username,
         'password' =>$password,
         'level' =>$level,
        ])->get(); 
    }
}

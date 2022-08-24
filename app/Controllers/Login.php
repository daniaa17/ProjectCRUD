<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('vw_login');
    }

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            // mengecek password
            if (password_verify($password, $dataUser->password)) {
                // jika password sama maka akan generate session
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('author/index'));
            } else {
                // jika password tidak sama maka akan muncul error warning
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            // menampilkan notif username & password tidak sesuai
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
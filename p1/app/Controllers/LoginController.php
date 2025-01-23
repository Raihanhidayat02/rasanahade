<?php

namespace App\Controllers;

use App\Models\PembeliModel;

class Auth extends BaseController
{
    protected $pembeliModel;

    public function __construct()
    {
        $this->pembeliModel = new PembeliModel();
        helper(['form', 'url']);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Rasana Hade'
        ];

        if ($this->request->getMethod() == 'post') {
            log_message('debug', 'Masuk ke login POST method');
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
                log_message('debug', 'Validasi form login berhasil');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                // Gunakan var_dump untuk debugging
                // var_dump($email, $password);
                // die();  // Berhenti eksekusi setelah var_dump

                try {
                    $user = $this->pembeliModel->where('email', $email)->first();

                    if ($user && password_verify($password, $user['password'])) {
                        log_message('debug', 'Login berhasil');
                        $sessionData = [
                            'id_pembeli' => $user['id_pembeli'],
                            'username' => $user['username'],
                            'email' => $user['email'],
                            'logged_in' => true
                        ];
                        session()->set($sessionData);
                        return redirect()->to('/dashboard');
                    }

                    log_message('debug', 'Email atau password salah');
                    session()->setFlashdata('error', 'Email atau password salah!');
                    return redirect()->back();
                } catch (\Exception $e) {
                    log_message('error', 'Error during login: ' . $e->getMessage());
                    session()->setFlashdata('error', 'Terjadi kesalahan saat login.');
                    return redirect()->back();
                }
            } else {
                log_message('debug', 'Validasi form login gagal');
                $data['validation'] = $this->validator;
            }
        } else {
            log_message('debug', 'Masuk ke login GET method');
        }

        return view('auth/login', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}

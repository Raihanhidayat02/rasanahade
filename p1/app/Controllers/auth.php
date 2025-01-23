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

    public function index()
    {
        return view('auth/dashboard');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function processRegister()
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah email atau username sudah digunakan
        if ($this->pembeliModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email sudah digunakan.');
        }

        if ($this->pembeliModel->where('username', $username)->first()) {
            return redirect()->back()->with('error', 'Username sudah digunakan.');
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $this->pembeliModel->insert([
            'email' => $email,
            'username' => $username,
            'password' => $hashedPassword,
            'role' => 'user'
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function processLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $this->pembeliModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak terdaftar.');
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah.');
        }

        // Set session user
        session()->set([
            'id_pembeli' => $user['id_pembeli'],
            'username' => $user['username'],
            'email' => $user['email'],
            'role' => $user['role'],
            'isLoggedIn' => true,
        ]);

        // Redirect ke halaman dashboard atau home
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}

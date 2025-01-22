<?php
session_start();

// Cek apakah user yang login adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    // Jika bukan user, alihkan ke halaman login atau halaman lain
    header('Location: login.php');
    exit();
}

// Proses untuk menampilkan data khusus user
echo "Selamat datang di dashboard user!";
?>

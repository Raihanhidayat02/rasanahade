<?php
session_start();
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username ada di database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $dbConn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Set session berdasarkan role
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];  // Simpan role di session

            // Redirect berdasarkan role
            if ($_SESSION['role'] == 'admin') {
                header('Location: admin_dashboard.php');  // Arahkan ke dashboard admin
            } else {
                header('Location: user_dashboard.php');  // Arahkan ke dashboard user
            }
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}

<?php
session_start();

// Cek apakah user yang login adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Jika bukan admin, alihkan ke halaman login atau halaman lain
    header('Location: login.php');
    exit();
}

// Proses untuk menampilkan menu atau data khusus admin
include('db_connection.php');

$sql = "SELECT * FROM menu";
$result = $dbConn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <div>
            <h3>" . $row['name'] . "</h3>
            <p>" . $row['description'] . "</p>
            <p>Price: " . number_format($row['price'], 2) . "</p>
        </div>";
    }
} else {
    echo "No menu items found.";
}
?>

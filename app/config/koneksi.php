<!-- <?php
        $connection = mysqli_connect("localhost", "root", "", "db_pln");

        // Check connection
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        ?>
 -->
<?php
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'db_pln'; // Ganti dengan nama database Anda

$connection = mysqli_connect($host, $username, $password, $database);

// Periksa connection
if (!$connection) { #sadas
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
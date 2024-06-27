<!-- SETUP KONEKSI DATABASE -->
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'sertifikasi-vsga';

$connect = mysqli_connect($host, $username, $password, $databaseName);

if (!$connect) {
    die('Koneksi Gagal');
}
?>
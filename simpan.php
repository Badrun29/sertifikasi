<!-- FUNCTION UNTUK SIMPAN DATA / INSERT DATA TO DATABASE -->
<?php
include 'koneksi.php';

$nama = $_POST['name'];
$tgl = $_POST['tgl'];
$noTelp = $_POST['noTelp'];
$jumlah = $_POST['jumlah'];
$jenisPesanan = $_POST['jenisPesanan'];
$cincau = isset($_POST['cincau']) ? 1 : 0;
$buble = isset($_POST['buble']) ? 1 : 0;
$hargaPaket = $_POST['harga'];
$totalBiaya = $_POST['totalBiaya'];

$query = "INSERT INTO tb_pemesanan (nama, noTelp, jumlah, jenisPesanan, cincau, buble, hargaPaket, totalBiaya, tgl) VALUES ('$nama', '$noTelp', '$jumlah', '$jenisPesanan', '$cincau', '$buble', '$hargaPaket', '$totalBiaya', '$tgl')";

$sql = mysqli_query($connect, $query);


if ($sql) {
    echo "<script type='text/javascript'>
        alert('Berhasil');
        window.location.href = 'pemesanan.php';
    </script>";
} else {
    echo "<script type='text/javascript'>
        alert('Gagal Input');
        window.location.href = 'pemesanan.php';
    </script>";
}



?>
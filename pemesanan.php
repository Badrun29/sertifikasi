<!-- FUNCTION UNTUK KONEK KE DATABASE  DAN MEMBACA DATA YANG ADA DI TB PESANAN -->
<?php

include 'koneksi.php';

$sql = "SELECT * FROM tb_pemesanan";
$query = mysqli_query($connect, $sql);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Es Teh Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .carousel-item img {
            object-fit: fill;
            width: 100%;
            height: 100%;
            max-height: 600px;
        }

        .carousel-inner {
            height: 600px;
        }

        /* css navbar */
        .navbar-brand img {
            height: 40px;
            width: auto;
            margin-right: 15px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .navbar-brand a {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .navbar-brand a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <!-- carousel -->
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1547825407-2d060104b7f8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Es Teh Manis</h5>
                    <p>Nikmati kesegaran es teh manis yang memukau dari Pesona Es Teh Manis, di mana Anda akan terpesona
                        dengan rasa manis yang pas, dinginnya yang menyegarkan, dan warna teh yang memikat hati.</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1562534104-6b964ad63e56?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>Es Teh Manis</h5>
                    <p>Nikmati kesegaran es teh manis yang memukau dari Pesona Es Teh Manis, di mana Anda akan terpesona
                        dengan rasa manis yang pas, dinginnya yang menyegarkan, dan warna teh yang memikat hati.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1492778297155-7be4c83960c7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Es Teh Manis</h5>
                    <p>Nikmati kesegaran es teh manis yang memukau dari Pesona Es Teh Manis, di mana Anda akan terpesona
                        dengan rasa manis yang pas, dinginnya yang menyegarkan, dan warna teh yang memikat hati.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfSRcTYqXdsxXGsZw8UI5PQndCfiZwyW4oKg&s"
                        alt="Logo Es Teh">
                    Es Teh Indonesia
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="formpemesanan.php">Pesan Sekarang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pemesanan.php">Data Pesanan</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- TABLE DATA PEMESANAN -->
        <div class="container mt-4 mb-5">
            <h4>Data Pemesanan</h4>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>No Telp</th>
                        <th>Jumlahg (pcs)</th>
                        <th>Jenis Pesanan</th>
                        <th>Cincau</th>
                        <th>Buble</th>
                        <th>Harga Paket</th>
                        <th>Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['noTelp'] ?></td>
                            <td><?= $data['jumlah'] ?></td>
                            <td><?= $data['jenisPesanan'] ?></td>
                            <td>
                                <?php if ($data['cincau']) { ?>
                                    <span class="badge bg-success">Yes</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger">No</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($data['buble']) { ?>
                                    <span class="badge bg-success">Yes</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger">No</span>
                                <?php } ?>
                            </td>
                            <td><?= $data['hargaPaket'] ?></td>
                            <td><?= $data['totalBiaya'] ?></td>
                            <td>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            function confirmation() {
                const choice = confirmation('Apakah anda yakin ? ')

                if (choice) {
                    return true
                } else {
                    alert('Hapus Dibatalkan')
                }
            }
        </script>
</body>

</html>
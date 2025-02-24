<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Es Teh Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- STYLE UNTUK CARD DAN CAROUSEL -->
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

        .card-img-top {
            height: 300px;
            object-fit: cover;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
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

        <!-- card -->

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1609016617751-e80552ae6ec2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEzfHx8ZW58MHx8fHx8"
                                    class="card-img-top" alt="Es teh segar">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh Segar</h5>
                                    <p class="card-text">Nikmati kesegaran es teh kami yang sempurna untuk menyegarkan
                                        diri di hari yang panas.</p>
                                    <a href="formpemesanan.php" class="btn btn-primary">Pesann Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8aWNlJTIwdGVhfGVufDB8fDB8fHww"
                                    class="card-img-top" alt="Es teh dengan lemon">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh Lemon</h5>
                                    <p class="card-text">Es teh lemon kami menggabungkan rasa asam dari lemon dengan
                                        kelembutan teh.</p>
                                    <a href="formpemesanan.php" class="btn btn-primary">Pesann Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1499638673689-79a0b5115d87?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aWNlJTIwdGVhfGVufDB8fDB8fHww"
                                    class="card-img-top" alt="Es teh dengan daun mint">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh Mint</h5>
                                    <p class="card-text">Rasakan kesegaran rasa mint dalam es teh mint istimewa kami.
                                        segera pesan di form pemesanan.
                                    </p>
                                    <a href="formpemesanan.php" class="btn btn-primary">Pesann Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <img src="https://images.unsplash.com/photo-1584279666123-6060b7d9af86?q=80&w=1886&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top img-fluid" alt="Es teh klasik">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh Klasik</h5>
                                    <p class="card-text">Es teh klasik kami menawarkan rasa yang tak lekang oleh waktu
                                        yang menghilangkan dahaga Anda.</p>
                                    <a href="formpemesanan.php" class="btn btn-primary">Pesann Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>
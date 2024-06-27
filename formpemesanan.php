<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Es Teh Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- STYLE UNTUK CSS CAROUSEL -->
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

        <!-- FORM TABLE PEMESANAN -->
        <div class="container mt-4 mb-5">
            <h4>Form Pemesanan</h4>
            <form action="simpan.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="nama" class="form-label">Nama Pemesan</label>
                            <input name="name" type="text" id="nama" class="form-control">
                        </div>
                        <div>
                            <label for="tgl" class="form-label">Tanggal Pemesanan</label>
                            <input name="tgl" type="date" id="tgl" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="noTelp" class="form-label">No Telephone</label>
                            <input name="noTelp" type="text" id="noTelp" class="form-control">
                        </div>
                        <div>
                            <label for="jumlah" class="form-label">Jumlah (PCS)</label>
                            <input name="jumlah" type="number" id="jumlah" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-3">
                            <label for="" class="form-label">Pilih Jenis EsTeh</label>
                            <div class="form-check">
                                <input name="jenisPesanan" class="form-check-input" type="radio" value="biasa"
                                    id="biasa">
                                <label class="form-check-label" for="biasa">
                                    Es Teh Biasa (Rp.7.000)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="jenisPesanan" class="form-check-input" type="radio" value="Premium"
                                    id="premium">
                                <label class="form-check-label" for="premium">
                                    Es Teh Premium (Rp.10.000)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-3">
                            <label for="" class="form-label">Toping</label>
                            <div class="form-check">
                                <input name="cincau" class="form-check-input" type="checkbox" value="" id="cincau">
                                <label class="form-check-label" for="cincau">
                                    Extra Toping Cincau (Rp.3.000)
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="buble" class="form-check-input" type="checkbox" value="" id="buble">
                                <label class="form-check-label" for="buble">
                                    Extra Toping Buble (Rp.5.000)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="harga" class="form-label">Harga Paket</label>
                            <input readonly name="harga" type="number" id="harga" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="totalBiaya" class="form-label">Total Biaya</label>
                            <input readonly name="totalBiaya" type="number" id="totalBiaya" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- CDN BOOTSTRAP NYA  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- LOGIN FUNCTION UNTUK PERHITUNGAN PEMESANAN -->
        <script>
            function hitung() {
                const jumlah = $('#jumlah').val()
                let hargaEsteh = 0
                const biasa = $('#biasa').is(':checked')
                const premium = $('#premium').is(':checked')
                const cincau = $('#cincau').is(':checked') ? 3_000 : 0;
                const buble = $('#buble').is(':checked') ? 5_000 : 0;
                if (biasa) {
                    hargaEsteh = 7_000
                }
                if (premium) {
                    hargaEsteh = 10_000
                }
                const hargaPaket = (hargaEsteh + cincau + buble)
                const totalBiaya = hargaPaket * Number(jumlah)
                $("#harga").val(hargaPaket);
                $("#totalBiaya").val(totalBiaya);

            }

            $('#jumlah, #biasa, #premium, #cincau, #buble').on('input', function () {
                hitung()
            })
        </script>
</body>

</html>
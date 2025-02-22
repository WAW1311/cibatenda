<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('storage/logocibatenda.jpg') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
        <title>CibaTenda | Sewa Tenda Murah</title>
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! TwitterCard::generate() !!}
        {!! JsonLd::generate() !!}
    </head>
    <body style="background-color: rgba(242, 239, 231, 1); font-family:;">
        <nav class="navbar navbar-expand-lg fixed-top shadow-bottom" style="background-color: rgba(72, 166, 167, 1);">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo di sebelah kiri -->
                <a class="navbar-brand text-white fs-4 fw-bold d-flex align-items-center" href="/">
                    <img src="{{ asset('storage/logo2.png') }}" alt="Logo" width="50" class="img-fluid me-2">
                    CIBA TENDA
                </a>

                <!-- Tombol toggler untuk mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu di sebelah kanan -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item rounded ms-lg-5">
                            <a class="nav-link fs-5 text-light rounded fw-bold" aria-current="page" href="/">BERANDA</a>
                        </li>
                        <li class="nav-item rounded ms-lg-5">
                            <a class="nav-link fs-5 text-light rounded fw-bold" href="/about">TENTANG</a>
                        </li>
                        <li class="nav-item rounded ms-lg-5">
                            <a class="nav-link fs-5 text-light rounded fw-bold" href="/pricelist">DAFTAR HARGA</a>
                        </li>
                        <li class="nav-item rounded ms-lg-5">
                            <a class="nav-link fs-5 text-light rounded fw-bold" href="/contact">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="margin-top: 6.5rem;">
            @yield('content')
        </div>
        <div class="px-0 pt-5 px-sm-5 w-100" style="background-color: rgba(72, 166, 167, 1);">
            <div class="d-flex flex-column flex-md-row justify-content-around">
                <div class="mx-auto mb-3 mb-lg-0" style="width: 318px; height: 300px;">
                    <p class="text-center text-light fw-bold fs-4">Layanan Kami</p>
                    <center><hr style=" border: 2px solid white; width: 10%`;"></center>
                    <p class="text-justify text-light">Ciba Tenda menyewakan berbagai model tenda,termasuk tenda dekorasi, tenda dekorasi serut,tenda plafon putih, tenda terpal, serta peralatan pesta, hingga jasa rias pengantin dengan hargayang bersaing dan bisa di nego.</p>
                </div>
                <div class="mx-auto mb-3 mb-lg-0" style="width: 318px; height: 300px;">
                    <p class="text-center text-light fw-bold fs-4">Cara Pemesanan</p>
                    <center><hr style=" border: 2px solid white; width: 100%;"></center>
                    <p class="text-justify text-light">Silahkan pilih produk yang akan di pesan lalu klik tombol pesan sekarang dan otomatis diarahkan ke Whatsapp admin untuk menginformasikan pemesanan yang anda inginkan serta negosiasi.</p>
                </div>
                <div class=" mx-auto mb-3 mb-lg-0" style="width: 318px; height: 300px;">
                    <p class="text-center text-light fw-bold fs-4">Kontak Kami</p>
                    <center><hr style=" border: 2px solid white; width: 100%;"></center>
                    <p class="text-justify text-light">JL Duren Tiga Selatan, RT08/RW03,<br>
                        Duren Tiga, Kecamatan Pancoran,<br>
                        Kota Jakarta Selatan.<br>
                        HP dan WA : 0857-4239-2436</p>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <footer class="text-center text-dark">
                Copyright &copy; 2025 CIBA TENDA. All rights reserved.
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

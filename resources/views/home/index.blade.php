@extends('layout/app')
@section('content')
<div class="container-fluid">
    <div class="mx-auto my-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/imghero1.jpeg') }}" class="d-block w-100" alt="Hero Image 1">
                    <div class="carousel-caption d-block text-center">
                        <h5 class="caption-title">CIBA TENDA</h5>
                        <p class="caption-text">TENDA, DEKORASI, PANGGUNG, DAN KURSI</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/imghero2.png') }}" class="d-block w-100" alt="Hero Image 2">
                    <div class="carousel-caption d-block text-center">
                        <h5 class="caption-title">CIBA TENDA</h5>
                        <p class="caption-text">RENTAL TENDA TERLENGKAP DI JAKARTA SELATAN</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/imghero3.png') }}" class="d-block w-100" alt="Hero Image 3">
                    <div class="carousel-caption d-block text-center">
                        <h5 class="caption-title">CIBA TENDA</h5>
                        <p class="caption-text">SIAP MENGSUKSESKAN DAN MEMERIAHKAN PESTA ANDA</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div>
        <div class="container mt-4 content-container rounded" style="background-color: rgba(72, 166, 167, 1);">
            <div class="container-box">
                <h2 class="mb-4 text-center text-white">SEWA TENDA DAN ALAT PESTA MURAH DI JAKARTA</h2>
                <div class="row align-items-center">
                    <div class="col-md-4 image-container">
                        <img class="mb-3 mb-lg-0" src="{{ asset('storage/mainimghero.jpg') }}" alt="A decorated event tent with chairs and tables inside" style="width: 100%; max-width: 400px; border-radius: 5px;">
                    </div>
                    <div class="col-md-8 text-white">
                        <p class="text-justify text-home">
                            Ciba Tenda menyewakan berbagai model tenda, seperti Tenda Dekorasi, Tenda Dekorasi + Penutup, Tenda Dekorasi Serut + Penutup, Tenda Dekorasi Serut, Tenda Plafon Putih Biasa, dan Tenda Terpal. Selain itu, kami juga menyediakan peralatan pesta, termasuk penutup dinding, kursi, alas papan, meja, pemanas, lampu, peralatan makan, kipas, kotak amplop, running teks, perlengkapan dapur, panggung, hingga jasa rias pengantin.<br><br><br><br>

                            Ciba Tenda memahami betul kebutuhan pelanggan akan tenda dan peralatan pesta yang berkualitas. Dengan komitmen untuk selalu memberikan yang terbaik, Ciba Tenda hadir untuk memastikan setiap acara berjalan meriah dan meninggalkan kesan yang mendalam bagi para tamu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="px-4 pb-3">
                <p class="text-justify text-home text-white">
                    Tenda dan peralatan pesta kami selalu terjaga kualitasnya melalui perawatan rutin. Ditambah dengan sentuhan kreativitas dalam dekorasi yang dapat disesuaikan dengan tema dan nuansa pilihan pelanggan, Ciba Tenda siap mendukung kesuksesan pesta Anda menjadi momen yang tak terlupakan.</p>
            </div>
        </div>
    </div>
    <div>
        <div class="container mt-4 content-container rounded" style="background-color: rgba(72, 166, 167, 1);">
            <div class="container-box">
                <div class="row align-items-center">
                    <div class="col-md-8 text-white">
                        <h3>MENGAPA CIBA TENDA ?</h3>
                        <ul>
                            <li>Pengalaman 15 Tahun</li>
                            <li>Pelayanan Terbaik</li>
                            <li>Pilihan Tenda yang Beragam</li>
                            <li>Perlengkapan Pesta Lengkap</li>
                            <li>Kualitas Terjaga</li>
                            <li>Dekorasi Kreatif dan Personal</li>
                            <li>Fokus pada Kepuasan Pelanggan</li>
                            <li>Harga bisa di nego</li>
                        </ul>
                        <P>Dengan kombinasi pengalaman, layanan lengkap, dan perhatian pada detail, Ciba Tenda adalah pilihan terbaik untuk mendukung kesuksesan pesta atau acara Anda.</P>
                    </div>
                    <div class="col-md-4 image-container">
                        <img class="img-fluid mb-3 mb-lg-0" src="{{ asset('storage/whycibatenda.jpeg') }}" alt="A decorated event tent with chairs and tables inside" style="width: 100%; max-width: 400px; border-radius: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

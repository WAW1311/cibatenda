@extends('layout/app')
@section('content')
<div class="container-fluid">
    <div class="container mt-4 content-container rounded" style="background-color: rgba(72, 166, 167, 1);">
        <div class="container-box">
            <h2 class="text-center text-white">TENTANG CIBA TENDA</h2>
            <div class="row align-items-center">
                <div class="col-md-4 image-container">
                    <img class="mb-3 mb-lg-0" src="{{ asset('storage/mainimghero.jpg') }}" alt="A decorated event tent with chairs and tables inside" style="width: 100%; max-width: 400px; border-radius: 5px;">
                </div>
                <div class="col-md-8 text-white text-home">
                    <p>
                        Ciba Tenda adalah usaha di bidang pengadaan tenda dan perlengkapan alat pesta yang telah
                        berdiri sejak 15 tahun yang lalu. Berlokasi di Jl. Duren Tiga Selatan, Ciba Tenda dimiliki
                        dan dikelola oleh Sakri Triyono, yang memiliki pengalaman dan dedikasi tinggi dalam memberikan
                        pelayanan terbaik.
                    </p>
                    <p>
                        Ciba Tenda menyewakan berbagai model tenda, seperti Tenda Dekorasi + Penutup, Tenda Dekorasi Serut + Penutup, Tenda Dekorasi Serut,
                        Tenda Plafon Putih Biasa, dan Tenda Terpal. Selain itu, kami juga menyediakan peralatan pesta,
                        termasuk penutup dinding, kursi, alas papan, meja, pemanas, lampu, peralatan makan, kipas, kotak amplop, running teks, perlengkapan dapur, panggung hingga jasa rias pengantin.
                        <br>Ciba Tenda memahami betul kebutuhan pelanggan akan tenda dan perlengkapan pesta yang berkualitas. Dengan komitmen untuk selalu memberikan yang terbaik,
                        Ciba Tenda hadir untuk memastikan setiap acara berjalan meriah dan memberikan kesan yang mendalam bagi para tamu.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

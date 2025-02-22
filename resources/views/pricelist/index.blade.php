@extends('layout/app')
@section('content')
<div class="container-fluid">
    <center>
        <div class="my-5" style="color: rgba(72, 166, 167, 1)">
            <h1 class="fw-bold">ALAT-ALAT PESTA</h1>
            <h5 class="fw-bold">ALAT - ALAT UNTUK MENDUKUNG PESTA ANDA</h5>
        </div>
    </center>
    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-3">
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto my-3 fw-bold text-white">TENDA</h4>
                <img src="{{ asset('storage/tenda.jpeg') }}" class="img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <thead>
                          <tr>
                            <th scope="col">Daftar</th>
                            <th scope="col">Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">Tenda Dekorasi + Penutup</th>
                            <td>Rp 50.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">Tenda Dekorasi</td>
                            <td>Rp 45.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">Tenda Dekorasi Serut + Penutup</td>
                            <td colspan="2">Rp 45.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">Tenda Dekorasi Serut</td>
                            <td colspan="2">Rp 30.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">Tenda Plafon Putih Biasa</td>
                            <td colspan="2">Rp 22.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">Tenda Terpal</td>
                            <td colspan="2">Rp 15.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">Penutup Dinding</td>
                            <td colspan="2">Rp 20.000/m</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20tenda" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto my-3 fw-bold text-white">PANGGUNG</h4>
                <img src="{{ asset('storage/panggung.jpeg') }}" class="img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <thead>
                          <tr>
                            <th scope="col">Daftar</th>
                            <th scope="col">Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">Panggung + Karpet</th>
                            <td>Rp 50.000 / m</td>
                          </tr>
                          <tr>
                            <td scope="row">Alas Papan + Karpet</td>
                            <td>Rp 35.000 / m</td>
                          </tr>
                          <tr>
                            <td scope="row">Alas papan</td>
                            <td colspan="2">Rp 20.000/m</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20panggung" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto my-3 fw-bold text-white">MEJA DAN KURSI</h4>
                <img src="{{ asset('storage/cibatenda.jpg') }}" class="img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <thead>
                          <tr>
                            <th scope="col">Daftar</th>
                            <th scope="col">Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">Kursi Futura + Bungkus</td>
                            <td>Rp 15.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">Kursi Futura</td>
                            <td>Rp 8.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">Meja + Taplak + Cover + Lis </td>
                            <td colspan="2">Rp 50.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">Meja + Taplak + Cover</td>
                            <td colspan="2">Rp 40.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                          <tr>
                            <td scope="row">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20meja%20dan%20kursi" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto my-3 fw-bold text-white">PERLENGKAPAN LAINNYA</h4>
                <img src="{{ asset('storage/prasmanan.jpeg') }}" class="img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <thead>
                          <tr>
                            <th scope="col">Daftar</th>
                            <th scope="col">Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">Pemanas Rolltop</td>
                            <td>Rp 70.000/set</td>
                          </tr>
                          <tr>
                            <td scope="row">Pemanas Kotak Besar Biasa</td>
                            <td>Rp 40.000/set</td>
                          </tr>
                          <tr>
                            <td scope="row">Lampu</td>
                            <td colspan="2">Rp 35.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">Piring + Sendok + Garpu</td>
                            <td colspan="2">Rp 5.000/set</td>
                          </tr>
                          <tr>
                            <td scope="row">Kotak Ampau Besar</td>
                            <td colspan="2">Rp 100.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">Running Teks</td>
                            <td colspan="2">Rp 350.000/bwh</td>
                          </tr>
                          <tr>
                            <td scope="row">Perlengkapan Alat Dapur</td>
                            <td colspan="2">Rp 1.000.000</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20perlengkapan%20tenda" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
    <div class="my-5" style="color: rgba(72, 166, 167, 1)">
        <h1 class="fw-bold">PAKET TENDA</h1>
        <h5 class="fw-bold">KAMI JUGA MENYEDIAKAN PAKET - PAKET TERBAIK</h5>
    </div>
</center>
<div class="container-fluid mb-5">
    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-3">
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto mt-3 fw-bold text-white">PAKET A</h4>
                <h5 class="mx-auto mb-3 fw-bold text-white">RP 25.000.000</h5>
                <img src="{{ asset('storage/whycibatenda.jpeg') }}" class=" img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <tbody>
                          <tr>
                            <td>Rias Pengantin dan Orang tua</td>
                          </tr>
                          <tr>
                            <td>Ganti Baju 2x</td>
                          </tr>
                          <tr>
                            <td>Tenda dekorasi = 60 m</td>
                          </tr>
                          <tr>
                            <td>Pelaminan + Panggung</td>
                          </tr>
                          <tr>
                            <td>Kursi Futura + Cover = 100 buah</td>
                          </tr>
                          <tr>
                            <td>Meja Prasmanan + Meja Terima Tamu</td>
                          </tr>
                          <tr>
                            <td>Kotak Ampau dan Kipas Blower = 2</td>
                          </tr>
                          <tr>
                            <td>Piring , Sendok, dan Garpu = 200</td>
                          </tr>
                          <tr>
                            <td>Gubugan = 2</td>
                          </tr>
                          <tr>
                            <td>Standing Bunga = 4</td>
                          </tr>
                          <tr>
                            <td>Pemanas Rolltop = 5</td>
                          </tr>
                          <tr>
                            <td>Lampu - lampu</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20tenda%20paket%20A" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto mt-3 fw-bold text-white">PAKET B</h4>
                <h5 class="mx-auto mb-3 fw-bold text-white">RP 22.500.000</h5>
                <img src="{{ asset('storage/paketB.jpeg') }}" class="img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <tbody>
                          <tr>
                            <td>Rias Pengantin dan Orang tua</td>
                          </tr>
                          <tr>
                            <td>Ganti Baju 2x</td>
                          </tr>
                          <tr>
                            <td>Tenda dekorasi = 60 m</td>
                          </tr>
                          <tr>
                            <td>Pelaminan + Panggung</td>
                          </tr>
                          <tr>
                            <td>Kursi Futura + Cover = 100 buah</td>
                          </tr>
                          <tr>
                            <td>Meja Prasmanan + Meja Terima Tamu</td>
                          </tr>
                          <tr>
                            <td>Kotak Ampau = 2 dan Kipas Blower = 1</td>
                          </tr>
                          <tr>
                            <td>Piring , Sendok, dan Garpu = 150</td>
                          </tr>
                          <tr>
                            <td>Gubugan = 2</td>
                          </tr>
                          <tr>
                            <td>Standing Bunga = 4</td>
                          </tr>
                          <tr>
                            <td>Pemanas Rolltop = 5</td>
                          </tr>
                          <tr>
                            <td>Lampu - lampu</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20tenda%20paket%20B" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card px-2"  style="background-color: rgba(72, 166, 167, 1)">
                <h4 class="mx-auto mt-3 fw-bold text-white">PAKET C</h4>
                <h5 class="mx-auto mb-3 fw-bold text-white">RP 22.500.000</h5>
                <img src="{{ asset('storage/paketC.jpeg') }}" class="img-fluid rounded card-img-top" alt="...">
                <div class="card-body p-0 py-3">
                    <table class="table table-success table-striped table-sm small">
                        <tbody>
                          <tr>
                            <td>Rias Pengantin dan Orang tua</td>
                          </tr>
                          <tr>
                            <td>Ganti Baju 2x</td>
                          </tr>
                          <tr>
                            <td>Tenda dekorasi = 60 m</td>
                          </tr>
                          <tr>
                            <td>Pelaminan + Panggung</td>
                          </tr>
                          <tr>
                            <td>Kursi Futura = 100 buah</td>
                          </tr>
                          <tr>
                            <td>Meja Prasmanan + Meja Terima Tamu</td>
                          </tr>
                          <tr>
                            <td>Kotak Ampau = 2 dan Kipas Blower = 1</td>
                          </tr>
                          <tr>
                            <td>Piring , Sendok, dan Garpu = 100</td>
                          </tr>
                          <tr>
                            <td>Gubugan = 2</td>
                          </tr>
                          <tr>
                            <td>Pemanas Rolltop = 5</td>
                          </tr>
                          <tr>
                            <td>Lampu - lampu</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </tbody>
                      </table>
                  <center><a href="https://wa.me/+6285742392436?text=Hallo%20Ciba%20Tenda,%20saya%20ingin%20menyewa%20tenda%20paket%20C" class="btn text-white" style="background-color: rgba(41, 115, 178, 1)">Pesan Sekarang</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $title = "CibaTenda | Sewa Tenda Murah";
        $description = Str::limit("Ciba Tenda menyewakan berbagai model tenda, seperti Tenda Dekorasi, Tenda Dekorasi + Penutup, Tenda Dekorasi Serut + Penutup, Tenda Dekorasi Serut, Tenda Plafon Putih Biasa, dan Tenda Terpal. Selain itu, kami juga menyediakan peralatan pesta, termasuk penutup dinding, kursi, alas papan, meja, pemanas, lampu, peralatan makan, kipas, kotak amplop, running teks, perlengkapan dapur, panggung, hingga jasa rias pengantin. Ciba Tenda memahami betul kebutuhan pelanggan akan tenda dan peralatan pesta yang berkualitas.", 160);
        $image = asset('storage/cibatenda.jpg');

        // Meta SEO
        SEOMeta::setTitle($title)
            ->setDescription($description)
            ->setCanonical(url()->current())
            ->setKeywords(['sewa tenda', 'tenda dekorasi', 'tenda pernikahan', 'peralatan pesta','tenda hajatan','ciba tenda', 'Ciba Tenda']);

        // Open Graph (Facebook)
        OpenGraph::setTitle($title)
            ->setDescription($description)
            ->setUrl(url()->current())
            ->addImage($image);

        // Twitter Card
        TwitterCard::setTitle($title)
            ->setDescription($description)
            ->setImage($image);

        // JSON-LD
        JsonLd::setTitle($title)
            ->setDescription($description)
            ->setType('Article')
            ->addImage($image);

        return view('home/index');
    }
}

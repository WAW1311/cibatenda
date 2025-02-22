<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $title = "TENTANG CIBA TENDA";
        $description = Str::limit("Ciba Tenda adalah usaha di bidang pengadaan tenda dan perlengkapan alat pesta yang telah berdiri sejak 15 tahun yang lalu. Berlokasi di Jl. Duren Tiga Selatan, Ciba Tenda dimiliki dan dikelola oleh Sakri Triyono, yang memiliki pengalaman dan dedikasi tinggi dalam memberikan pelayanan terbaik.", 160);
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
        return view('about.index');
    }
}


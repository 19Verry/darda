<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlideshow;
use App\Models\HomeTentang;
use App\Models\HomePsb;
use App\Models\HomeFasilitas;
use App\Models\HomeKegiatan;
use App\Models\HomePrestasi;
use App\Models\HomeSejarah;

class HomeController extends Controller
{
    public function index()
    {
        $kegiatan = HomeKegiatan::query()->get();
        $psb = HomePsb::first();
        $slideshow = HomeSlideshow::get();
        $tentang = HomeTentang::first();
        $fasilitas = HomeFasilitas::query()->get();
        $prestasi = HomePrestasi::query()->get();
        $sejarah = HomeSejarah::first();
        return view('home', [
            'slideshow' => $slideshow,
            'tentang' => $tentang,
            'psb' => $psb,
            'fasilitas' => $fasilitas,
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi,
            'sejarah' => $sejarah,

        ]);
    }
}

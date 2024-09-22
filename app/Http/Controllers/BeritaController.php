<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\HomeTentang;
use App\Models\HomeKegiatan;
use App\Models\HomePrestasi;
use App\Models\HomeSlideshow;

class BeritaController extends Controller
{
    public function index()
    {
        $kegiatan = HomeKegiatan::query()->get();
        $prestasi = HomePrestasi::query()->get();
        $pengumuman = Pengumuman::query()->get();
        $tentang = HomeTentang::first();
        $slideshow = HomeSlideshow::get();
        $berita = Berita::query()->get();
        $HeaderFooter = HeaderFooter::first();
        return view('home', [
            'kegiatan' => $kegiatan,
            'prestasi' => $prestasi,
            'HeaderFooter' => $HeaderFooter,
            'berita' => $berita,
            'tentang' => $tentang,
            'slideshow' => $slideshow,
            'pengumuman' => $pengumuman,

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeSejarah;
use App\Models\HomeYayasan;

class SejarahYayasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeSejarah::factory()->create([
            'judul_deskripsi' => 'Apa itu Abu Darda?',
            'judul_timeline' => 'Garis Waktu Abu Darda',
            'link_video' => 'https://youtu.be/_ZPymZavB-A?si=nduGw_8TaFjnsTTK',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a lacinia turpis. Nam ex urna, sodales vitae finibus commodo, luctus sodales ante. Morbi turpis lorem, consectetur nec erat nec, elementum laoreet justo. Nulla aliquet, diam quis accumsan consequat, enim est tristique elit, vitae condimentum nisl neque lacinia turpis. Etiam quam.',
            'timeline' => '<li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi penghafal Al Quran</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Menanamkan aqidah yang benar</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi penghafal hadists</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi yang menguasai bahasa arab secara aktif</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Melahirkan generasi yang mampu membaca dan memahami kitab-kitab para ulama</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi yang berbakti kepada orang tua</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Menanamkan nilai-nilai akhlaq yang mulia dan berjiwa sosial</p>
                        </li>',
            'gambar' => 'default.jpg',
        ]);

        HomeYayasan::factory()->create([
            'judul_deskripsi' => 'Apa itu Abu Darda?',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a lacinia turpis. Nam ex urna, sodales vitae finibus commodo, luctus sodales ante. Morbi turpis lorem, consectetur nec erat nec, elementum laoreet justo. Nulla aliquet, diam quis accumsan consequat, enim est tristique elit, vitae condimentum nisl neque lacinia turpis. Etiam quam.',
            'gambar1' => 'default.jpg',
            'gambar2' => 'default.jpg',
            'gambar3' => 'default.jpg',
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\HeaderFooter;
use App\Models\HomeSlideshow;
use App\Models\HomeTentang;
use App\Models\ProdiReguler;
use App\Models\ProdiTakhassush;
use App\Models\HomePsb;

use App\Models\HomeFasilitas;
use App\Models\HomeKegiatan;
use App\Models\HomePrestasi;
use App\Models\KurikulumSmp;
use App\Models\KurikulumSma;

use App\Models\BidangAkhlak;
use App\Models\BidangBahasa;
use App\Models\BidangKesantrian;
use App\Models\BidangTahfidz;
use App\Models\Berita;
use App\Models\formpsb;
use App\Models\Pengumuman;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$12$4pzlsraimOMgvH4OjP.v/eRnjYP5R8oVYYYyLSGCc0i9cFoY4dSy6',
            'role' => 'mudir',
        ]);
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => '$2y$12$4pzlsraimOMgvH4OjP.v/eRnjYP5R8oVYYYyLSGCc0i9cFoY4dSy6',
            'role' => 'calonsantri',
        ]);


        HeaderFooter::factory()->create([
            'nama_mahad' => 'Ma had Abu Ad Darda',
            'warna_slidshow' => '#060606',
            'warna_heading' => '#ffffff',
            'warna_judul' => '#394047',
            'warna_paragraph' => '#444444',
            'nama_jalan' => 'Jl. Merak Sakti',
            'kelurahan_kecamatan_kota' => 'Kelurahan Simpang Baru, Kecamatan Tampan, Pekanbaru',
            'no_hp' => '+62 811 752 6232',
            'email' => 'abudarda@gmail.com',
            'link_facebook' => 'https://www.facebook.com/profile.php?id=100084932678568',
            'link_instagram' => 'https://www.instagram.com/mahadtahfizhabuaddarda?igsh=MWwwbWpjMmJoeXd1NA==',
            'link_youtube' => 'https://www.youtube.com/@masjidjamiabudarda',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6858105366637!2d101.3820970741607!3d0.46696709831261257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f875d787ef%3A0x95502175cb982467!2sMahad%20Tahfizh%20Abu%20Ad%20Darda!5e0!3m2!1sen!2sid!4v1724603134242!5m2!1sen!2sid',
        ]);

        HomeSlideshow::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Welcome to Hidayah',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);
        HomeSlideshow::factory()->create([
            'gambar' => '3.jpg',
            'judul' => 'At vero eos et accusamus',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);
        HomeSlideshow::factory()->create([
            'gambar' => '3.jpg',
            'judul' => 'Temporibus autem quibusdam',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);
        HomeSlideshow::factory()->create([
            'gambar' => '4.jpg',
            'judul' => 'Temporibus autem quibusdam',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);

        HomeTentang::factory()->create([
            'gambar' => ' vidio.jpg',
            'link_vidio' => 'https://youtu.be/_ZPymZavB-A?si=nduGw_8TaFjnsTTK',
            'visi_mahad' => 'Ma had Tahfidz Abu AdDarda Pekanbaru bertujuan untuk mewujudkan para hafizh yang berkualitas dan berakhlaq mulia serta memahami ilmu Syari berdasarkan Al-Quran dan Sunnah sesuai pemahaman generasi terbaik.',
            'misi_mahad' => '<li>
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
            'jumlah_santri' => '232',
            'jumlah_ustad' => '521',
            'tahun_ajaran' => '2024',
        ]);

        ProdiReguler::factory()->create([
            'kop' => 'Hafalan Al-Quran 30 Juz dengan Mutqin (Kokoh) Maksimal dalam 5 Tahun',
            'deskripsi' => '<p>
                                Selamat datang di halaman resmi Program Studi Reguler, tempat pembelajaran mendalam di
                                bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Quran,
                                menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                            </p>
                            <p>
                                Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                bahasa Arab, meneliti ilmu-ilmu syari, dan menjadi teladan bagi masyarakat.
                                Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                negeri maupun internasional.
                            </p>
                            <p>
                                Mari bergabung dengan Program Studi Reguler dan temukan peluang untuk mengembangkan
                                pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                            </p>

                            <p>
                                Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                Di Program Studi Reguler, kami percaya bahwa setiap individu memiliki potensi luar biasa
                                untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan ini
                                untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                untuk menghidupkan kembali tradisi keilmuan Islam.
                            </p>',
            'pendaftaran' => 'Gratis',
            'uang_pangkal' => 'Gratis',
            'uang_pakaian' => 'Rp.1.600.000 (Pakaian 5 Stel)',
            'uang_bulanan' => 'Rp.1.900.000',
            'uang_buku' => 'Rp.650.000 (Untuk Setahun)',
        ]);

        ProdiTakhassush::factory()->create([
            'kop' => 'Hafalan Al-Quran 30 Juz dengan Mutqin (Kokoh) Maksimal dalam 3 Tahun',
            'deskripsi' => '<p>
                                Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam
                                di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Quran,
                                menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                            </p>
                            <p>
                                Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                bahasa Arab, meneliti ilmu-ilmu syari, dan menjadi teladan bagi masyarakat.
                                Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                negeri maupun internasional.
                            </p>
                            <p>
                                Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan
                                pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                            </p>

                            <p>
                                Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar
                                biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan
                                ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                untuk menghidupkan kembali tradisi keilmuan Islam.
                            </p>',
            'pendaftaran' => 'Gratis',
            'uang_pangkal' => 'Gratis',
            'uang_pakaian' => 'Rp.1.500.000 (Pakaian 5 Stel)',
            'uang_bulanan' => 'Rp.1.900.000',
            'uang_buku' => 'Rp.650.000 (Untuk Setahun)',
        ]);

        HomePsb::factory()->create([
            'judul' => 'Penerimaan Santri Baru Gelombang 2',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ]);

        HomeFasilitas::factory()->create([
            'gambar' => 'kelas1.jpg',
            'judul' => 'Kelas',
            'deskripsi' => 'Ini kelas',
        ]);
        HomeFasilitas::factory()->create([
            'gambar' => 'masjid1.jpg',
            'judul' => 'Masjid',
            'deskripsi' => 'Ini mesjid',
        ]);
        HomeFasilitas::factory()->create([
            'gambar' => 'asrama1.jpg',
            'judul' => 'Asrama',
            'deskripsi' => 'Ini asrama',
        ]);
        HomeFasilitas::factory()->create([
            'gambar' => 'asrama3.jpg',
            'judul' => 'Asrama',
            'deskripsi' => 'Ini asrama',
        ]);

        HomeKegiatan::factory()->create([
            'gambar' => 'tahsin.jpg',
            'judul' => 'Tahsin',
            'deskripsi' => 'Al Quran',
        ]);
        HomeKegiatan::factory()->create([
            'gambar' => 'kajian.jpg',
            'judul' => 'kajian',
            'deskripsi' => 'Islami',
        ]);
        HomeKegiatan::factory()->create([
            'gambar' => 'bukber.jpg',
            'judul' => 'Buka Puasa Bersama',
            'deskripsi' => 'Ramadhan / Senin & Kamis',
        ]);

        HomePrestasi::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        HomePrestasi::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        HomePrestasi::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);

        KurikulumSmp::factory()->create([
            'deskripsi' => "<p>
                                Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam
                                di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an,
                                menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                            </p>
                            <p>
                                Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat.
                                Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                negeri maupun internasional.
                            </p>


                            <p>
                                Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan
                                pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                            </p>

                            <p>
                                Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar
                                biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan
                                ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                untuk menghidupkan kembali tradisi keilmuan Islam.
                            </p>",
            'kepala_kurikulum' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
            'kontak' => '08954325',
        ]);
        KurikulumSma::factory()->create([
            'deskripsi' => "<p>
                                Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam
                                di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an,
                                menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                            </p>
                            <p>
                                Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat.
                                Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                negeri maupun internasional.
                            </p>


                            <p>
                                Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan
                                pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                            </p>

                            <p>
                                Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar
                                biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan
                                ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                untuk menghidupkan kembali tradisi keilmuan Islam.
                            </p>",
            'kepala_kurikulum' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
            'kontak' => '08954325',
        ]);

        BidangTahfidz::factory()->create([
            'deskripsi' => "<p>
                                Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam
                                di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an,
                                menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                            </p>
                            <p>
                                Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat.
                                Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                negeri maupun internasional.
                            </p>


                            <p>
                                Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan
                                pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                            </p>

                            <p>
                                Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar
                                biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan
                                ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                untuk menghidupkan kembali tradisi keilmuan Islam.
                            </p>",
            'kepala_tahfidz' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
            'gambar' => 'default.jpg',
        ]);

        BidangKesantrian::factory()->create([
            'deskripsi' => "<p>
                                Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam
                                di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an,
                                menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                            </p>
                            <p>
                                Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat.
                                Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                negeri maupun internasional.
                            </p>


                            <p>
                                Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan
                                pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                            </p>

                            <p>
                                Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar
                                biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan
                                ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                untuk menghidupkan kembali tradisi keilmuan Islam.
                            </p>",
            'kepala_kesantrian' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
        ]);
        Berita::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        Berita::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        Berita::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        Berita::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        Berita::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        Berita::factory()->create([
            'gambar' => '1.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        Pengumuman::factory()->create([
            'pdf' => 'Kaldik 2024-2025_Edit-1.pdf',
            'judul' => 'Kalender Akademik Mahad Abu Ad Darda',
        ]);
        formpsb::factory()->create([
            'status' => 'terdaftar',
            'tanggal_pendaftaran' => now(),
            'nama_lengkap' => 'Akbar Maulana',
            'nik' => '1234567890123456',
            'nisn' => '0012345678',
            'tempat_lahir' => 'Pekanbaru',
            'tanggal_lahir' => '2005-03-15',
            'alamat' => 'Jln. Marpoyan Damai No. 12',
            'provinsi' => 'Riau',
            'kabupaten_kota' => 'Pekanbaru',
            'kecamatan' => 'Bukit Raya',
            'desa_kelurahan' => 'Tangkerang Utara',
            'asal_sekolah' => 'SMPN 5 Pekanbaru',
            'provinsi_sekolah_asal' => 'Riau',
            'kabupaten_kota_sekolah_asal' => 'Pekanbaru',
            'kecamatan_sekolah_asal' => 'Bukit Raya',
            'tahun_lulus' => '2022',
            'upload_ijazah' => '123.pdf', 
            'nama_ayah' => 'Syahrul',
            'pendidikan_ayah' => 'S1',
            'pekerjaan_ayah' => 'HRD',
            'penghasilan_ayah' => '5000000',
            'no_hp_ayah' => '081234567890',
            'nama_ibu' => 'Marni',
            'pendidikan_ibu' => 'D3',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'penghasilan_ibu' => '3000000',
            'no_hp_ibu' => '081234567891',
            'upload_rapor_kelas_5' => 'rapor_kls_5_akbar.pdf', 
            'prestasi_lain' => 'Juara 2 Olimpiade Matematika',
            'jumlah_hafalan' => '5',
            'prestasi_alquran' => 'Juara 1 Tilawah',
            'prodi_dipilih' => 'Teknik Informatika',
            'penandatangan' => 'Dr. Abdul Rahman',
            'foto_3x4' => '123.jpg', 
            'upload_kk' => '123.pdf', 
            'upload_akte' => '123.pdf', 
            'email' => 'akbar.maulana@example.com',
            'tahap1' => 'lulus',
            'tahap2' => 'menunggu'
        ]);
    }
}

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
use App\Models\Ortu;
use App\Models\Staff;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        HeaderFooter::factory()->create([
            'nama_mahad' => 'Ma had Abu Ad Darda',
            'warna_slidshow' => '#060606',
            'warna_heading' => '#ffffff',
            'warna_judul' => '#394047',
            'warna_paragraph' => '#444444',
            'nama_jalan' => 'Jl. Merak Sakti',
            'kelurahan_kecamatan_kota' => 'Kelurahan Simpang Baru, Kecamatan Tampan, Pekanbaru',
            'nomor_telphone' => '+62 811 752 6232',
            'link_facebook' => 'https://www.facebook.com/profile.php?id=100084932678568',
            'link_instagram' => 'https://www.instagram.com/mahadtahfizhabuaddarda?igsh=MWwwbWpjMmJoeXd1NA==',
            'link_youtube' => 'https://www.youtube.com/@masjidjamiabudarda',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6858105366637!2d101.3820970741607!3d0.46696709831261257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f875d787ef%3A0x95502175cb982467!2sMahad%20Tahfizh%20Abu%20Ad%20Darda!5e0!3m2!1sen!2sid!4v1724603134242!5m2!1sen!2sid',
        ]);

        HomeSlideshow::factory()->create([
            'gambar' => '1',
            'judul' => 'Welcome to Hidayah',
            'deskripsi' => '',
        ]);
        HomeSlideshow::factory()->create([
            'gambar' => '2',
            'judul' => 'At vero eos et accusamus',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);
        HomeSlideshow::factory()->create([
            'gambar' => '3',
            'judul' => 'Temporibus autem quibusdam',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);
        HomeSlideshow::factory()->create([
            'gambar' => '4',
            'judul' => 'Temporibus autem quibusdam',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
        ]);

        HomeTentang::factory()->create([
            'gambar' => ' Mahad',
            'link_vidio' => 'https://youtu.be/_ZPymZavB-A?si=nduGw_8TaFjnsTTK',
            'visi_mahad' => 'Ma had Tahfidz Abu AdDarda Pekanbaru bertujuan untuk mewujudkan para hafizh yang berkualitas dan berakhlaq mulia serta memahami ilmu Syari berdasarkan Al-Quran dan Sunnah sesuai pemahaman generasi terbaik.',
            'misi_mahad' => 'Mencetak generasi penghafal Al Quran 
                            Menanamkan aqidah yang benar
                            Mencetak generasi penghafal hadists
                            Mencetak generasi yang menguasai bahasa arab secara aktif
                            Melahirkan generasi yang mampu membaca dan memahami kitab-kitab para ulama
                            Mencetak generasi yang berbakti kepada orang tua
                            Menanamkan nilai-nilai akhlaq yang mulia dan berjiwa sosial',
            'jumlah_santri' => '232',
            'jumlah_ustad' => '521',
        ]);

        ProdiReguler::factory()->create([
            'kop' => 'Hafalan Al-Quran 30 Juz dengan Mutqin (Kokoh) Maksimal dalam 5 Tahun',
            'deskripsi' => 'Selamat datang di halaman resmi Program Studi Reguler, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Quran, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.',
            'pendaftaran' => 'Gratis',
            'uang_pangkal' => 'Gratis',
            'uang_pakaian' => 'Rp.1.600.000 (Pakaian 5 Stel)',
            'uang_bulanan' => 'Rp.1.900.000',
            'uang_buku' => 'Rp.650.000 (Untuk Setahun)',
        ]);

        ProdiTakhassush::factory()->create([
            'kop' => 'Hafalan Al-Quran 30 Juz dengan Mutqin (Kokoh) Maksimal dalam 3 Tahun',
            'deskripsi' => 'Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Quran, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.',
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
            'gambar' => 'assets/img/fasilitas/kelas1.jpg',
            'nama' => 'kelas',
        ]);
        HomeFasilitas::factory()->create([
            'gambar' => 'assets/img/fasilitas/masjid1.jpg',
            'nama' => 'masjid',
        ]);
        HomeFasilitas::factory()->create([
            'gambar' => 'assets/img/fasilitas/asrama1.jpg',
            'nama' => 'asrama',
        ]);

        HomeKegiatan::factory()->create([
            'gambar' => 'assets/img/kegiatan/tahsin.jpg',
            'nama' => 'Tahsin',
            'deskripsi' => 'Al Quran',
        ]);
        HomeKegiatan::factory()->create([
            'gambar' => 'assets/img/kegiatan/kajian.jpg',
            'nama' => 'kajian',
            'deskripsi' => 'Islami',
        ]);
        HomeKegiatan::factory()->create([
            'gambar' => 'assets/img/kegiatan/bukber.jpg',
            'nama' => 'Buka Puasa Bersama',
            'deskripsi' => 'Ramadhan / Senin & Kamis',
        ]);

        HomePrestasi::factory()->create([
            'gambar' => 'assets/img/kegiatan/kajian.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        HomePrestasi::factory()->create([
            'gambar' => 'assets/img/kegiatan/kajian.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);
        HomePrestasi::factory()->create([
            'gambar' => 'assets/img/kegiatan/kajian.jpg',
            'judul' => 'Juara 1 Lomba Tahfidz',
            'deskripsi' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident',
        ]);

        KurikulumSmp::factory()->create([
            'deskripsi' => 'Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Quran, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam. Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam bahasa Arab, meneliti ilmu-ilmu syari, dan menjadi teladan bagi masyarakat. Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam negeri maupun internasional. Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap menghadapi tantangan global dengan landasan ilmu agama yang kuat. Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami. Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen untuk menghidupkan kembali tradisi keilmuan Islam.',
            'kepala_kurikulum' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
        ]);
        KurikulumSma::factory()->create([
            'deskripsi' => 'Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Quran, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam. Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam bahasa Arab, meneliti ilmu-ilmu syari, dan menjadi teladan bagi masyarakat. Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam negeri maupun internasional. Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap menghadapi tantangan global dengan landasan ilmu agama yang kuat. Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami. Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen untuk menghidupkan kembali tradisi keilmuan Islam.',
            'kepala_kurikulum' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
        ]);

        BidangTahfidz::factory()->create([
            'deskripsi' => "Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam. Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat. Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam negeri maupun internasional. Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap menghadapi tantangan global dengan landasan ilmu agama yang kuat. Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami. Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen untuk menghidupkan kembali tradisi keilmuan Islam.",
            'kepala_tahfidz' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
        ]);

        BidangKesantrian::factory()->create([
            'deskripsi' => '',
            'kepala_kesantrian' => '',
            'masa_jabatan' => '',
        ]);

        BidangAkhlak::factory()->create([
            'deskripsi' => "Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam. Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat. Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam negeri maupun internasional. Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap menghadapi tantangan global dengan landasan ilmu agama yang kuat. Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami. Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen untuk menghidupkan kembali tradisi keilmuan Islam.",
            'kepala_akhlak' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
        ]);

        BidangBahasa::factory()->create([
            'deskripsi' => "Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an, menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam. Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat. Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam negeri maupun internasional. Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap menghadapi tantangan global dengan landasan ilmu agama yang kuat. Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami. Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen untuk menghidupkan kembali tradisi keilmuan Islam.",
            'kepala_bahasa' => 'M.Zakri',
            'masa_jabatan' => '2019-2024',
        ]);

        Staff::factory()->create([
            'username' => 'tahfidz123@abudarda.com',
            'email' => 'tahfidz123@abudarda.com',
            'edit_prodi' => 'Bisa',
            'edit_program' => 'Tidak',
            'edit_kurikulum' => 'Tidak',
            'edit_tahfidz' => 'Bisa',
            'edit_kesantrian' => 'Tidak',
            'edit_akhlak' => 'Bisa',
            'edit_bahasa' => 'Bisa',
            'password' => '123',
        ]);

        Ortu::factory()->create([
            'username' => 'Budiyono',
            'email' => 'budiyono@gmail.com',
            'password' => 'budiyono123',
        ]);
    }
}
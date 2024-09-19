<x-layout-official>
    <div class="page-title dark-background" style="padding-bottom: 50px">
        <div class="container position-relative">
            <h1>Progam Sekolah Menengah Pertama</h1>
        </div>
    </div>
    <!-- End of .page-title -->

    <div class="tab-content">
        <!-- Takhassush Tab Content -->
        <div class="tab-pane fade show active" id="Takhassush">
            <section id="portfolio-details" class="portfolio-details section">
                <div class="row justify-content-between px-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <h3>Sekolah Menengah Pertama</h3>
                            <p>
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
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Informasi Program</h3>
                            <ul>
                                <li><strong>Kepala Program</strong>M.Zakri</li>
                                <li><strong>Masa Jabatan</strong>2019-2024</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- End of Takhassush Tab Content -->

    </div>
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <!-- Footer About Section -->
                <div class="col-lg-7 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Kontak Ma'had Abu Ad Darda</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Merak Sakti</p>
                        <p>Kelurahan Simpang Baru, Kecamatan Tampan, Pekanbaru</p>
                        <p class="mt-3"><strong>Telephone:</strong> +62 811 752 6232</p>
                        <p class="mt-3"><strong>Senin - Jumat:</strong> 08:00 - 17:00 WIB</p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="{{ $HeaderFooter->link_facebook }}" target="blank">
                            <i class="bi bi-facebook" style="color: #4267B2;"></i> <!-- Warna Facebook -->
                        </a>
                        <a href="{{ $HeaderFooter->link_instagram }}" target="blank">
                            <i class="bi bi-instagram" style="color: #C13584;"></i> <!-- Warna Instagram -->
                        </a>
                        <a href="{{ $HeaderFooter->youtube }}" target="blank">
                            <i class="bi bi-youtube" style="color: #FF0000;"></i> <!-- Warna YouTube -->
                        </a>
                    </div>

                </div>

                <!-- Footer Map Section -->
                <div class="col-lg-5 col-md-6 footer-links">
                    <a href="https://maps.app.goo.gl/NBALCBpijXnpDF2H6" class="logo d-flex align-items-center"
                        target="_blank">
                        <h4 class="sitename">Map Ma'had Abu Ad Darda</h4>
                    </a>
                    <iframe class="maps"
                        src="{{ $HeaderFooter->link_maps }}"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <footer class="container d-flex justify-content-center align-items-center mt-4 copyright">
            <div class="text-center textcopy">
                <p class="mb-0 textcopy2">© <span>Copyright</span> <strong class="px-1 sitename">Abu Darda'</strong>
                    <span>All Rights Reserved</span>
                </p>
            </div>
        </footer>


    </footer>
</x-layout-official>

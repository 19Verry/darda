<x-layout-official>
    <div class="page-title dark-background" style="padding-bottom: 50px">
        <div class="container position-relative">
            <h1>Bidang Bahasa</h1>
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
                            <h3>Bahasa</h3>
                            <?= htmlspecialchars_decode($bahasa['deskripsi']) ?>
                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Informasi Bidang</h3>
                            <ul>
                                <li><strong>Kepala Bidang</strong>{{ $bahasa->kepala_bahasa }}</li>
                                <li><strong>Masa Jabatan</strong>{{ $bahasa->masa_jabatan }}</li>
                               
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- End of Takhassush Tab Content -->

    </div>
</x-layout-official>

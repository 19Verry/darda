<x-layout-official>
    <div class="page-title dark-background" style="padding-bottom: 50px">
        <div class="container position-relative">
            <h1>Kurikulum Sekolah Menengah Pertama</h1>
        </div>
    </div>
    <!-- End of .page-title -->

    <div class="tab-content">
        <!-- Takhassush Tab Content -->
        <div class="tab-pane fade show active" id="Takhassush">
            <section id="portfolio-details" class="portfolio-details section">
                <div class="row justify-content-between px-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description" style="text-align: justify;">
                            <h3>Sekolah Menengah Pertama</h3>
                            <?= htmlspecialchars_decode($smp['deskripsi']) ?>
                        </div>
                    </div>


                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/kurikulum/smp/' . $smp->gambar) }}" class="img-fluid"
                            alt="">
                    </div>

                </div>
                <div class="row justify-content-between px-5 py-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Informasi Kurikulum</h3>
                            <ul>
                                <li><strong>Kepala Kurikulum</strong>{{ $smp->kepala_kurikulum }}</li>
                                <li><strong>Kontak Kurikulum</strong>{{ $smp->kontak }}</li>
                                <li><strong>Masa Jabatan</strong>{{ $smp->masa_jabatan }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End of Takhassush Tab Content -->

    </div>
</x-layout-official>

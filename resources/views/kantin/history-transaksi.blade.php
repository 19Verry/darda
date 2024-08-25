<x-layout-kantin>
    <div class="pagetitle">
        <h1>History Transaksi</h1>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body position-relative">
                        <div class="row align-items-center mt-5">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="d-flex flex-column flex-md-row gap-2">
                                    <!-- Waktu Mulai -->
                                    <div class="flex-grow-1">
                                        <label for="dateInput1" class="form-label">Rentang Waktu Awal</label>
                                        <input type="date" class="form-control" id="dateInput1"
                                            onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'"
                                            placeholder="Pilih Tanggal" style="color: #6c757d;">
                                    </div>
                                    <!-- Waktu Akhir -->
                                    <div class="flex-grow-1">
                                        <label for="dateInput2" class="form-label">Rentang Waktu Akhir</label>
                                        <input type="date" class="form-control" id="dateInput2"
                                            onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'"
                                            placeholder="Pilih Tanggal" style="color: #6c757d;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive mt-3">
                            <table class="table datatable table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Harga/Barang</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>19/08/2024</td>
                                        <td>Fullo</td>
                                        <td>5 pcs</td>
                                        <td>Rp.10.000,00</td>
                                        <td>Rp.50.000,00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>09/08/2024</td>
                                        <td>Tanggo</td>
                                        <td>2 pcs</td>
                                        <td>Rp.5.000,00</td>
                                        <td>Rp.10.000,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>

    </section>

</x-layout-kantin>

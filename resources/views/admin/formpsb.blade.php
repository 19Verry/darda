<x-layout-admin>
    <header class="pagetitle">
        <h1>Kelola Staff</h1>
    </header><!-- End Page Title -->

    <section class="section">
        <div class="container">
            <article class="card">
                <header class="card-header">
                    <h5 class="card-title">Table Staff untuk Mengupdate Status Penerimaan Calon Santri Baru </h5>
                    <p>Sebagai Admin, anda bisa mengelola status calon penerimaan santri baru. Anda dapat mengubah
                        status penerimaan calon santri baru.</p>
                </header>

                <!-- Card with table -->
                <article class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <p class="text-warning mt-2">
                            Informasi: Table ini diisi dengan urutan data yang terbaru, sehingga data yang masuk akan
                            diletak baris
                            teratas!
                        </p>
                        <table class="table table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No Pendaftaran</th>
                                    <th>Nama Calon Santri</th>
                                    <th>Prodi</th>
                                    <th>NIK</th>
                                    <th>Detail</th>
                                    <th>Update Tahap 1</th>
                                    <th>Update Tahap 2</th>
                                    <th>Submit</th>
                                </tr>
                            </thead>

                            <tbody class="align-middle">
                                @foreach ($formpsb as $index => $santri)
                                    <tr>
                                        <td>{{ $santri->id }}</td>
                                        <td>{{ $santri->nama_lengkap }}</td>
                                        <td>{{ $santri->prodi_dipilih }}</td>
                                        <td>{{ $santri->nik }}</td>
                                        <td>
                                            <!-- Button untuk membuka modal detail -->
                                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal{{ $santri->id }}">
                                                <i class="bi bi-search text-white"></i>
                                            </button>
                                            
                                        </td>
                                        <form action="{{ route('admin.formpsb.update', $santri->id) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <td>
                                                <select name="tahap1" class="form-control" id="tahap1" required>
                                                    <option value="Diproses" {{ $santri->tahap1 == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                    <option value="Diterima" {{ $santri->tahap1 == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                                    <option value="Ditolak" {{ $santri->tahap1 == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="tahap2" class="form-control" id="tahap2" required>
                                                    <option value="Diproses" {{ $santri->tahap2 == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                    <option value="Diterima" {{ $santri->tahap2 == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                                    <option value="Ditolak" {{ $santri->tahap2 == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                        </form>
                                        
                                        </td>
                                    </tr>





                                    <!-- Modal untuk menampilkan detail -->
                                    <div class="modal fade" id="detailModal{{ $santri->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $santri->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="detailModalLabel{{ $santri->id }}"><strong> DETAIL SANTRI</strong></h3>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong>No Pendaftaran:</strong> {{ $santri->id }}</p>
                                                            <p><strong>Email:</strong> {{ $santri->email }}</p>
                                                            <p><strong>Tanggal Pendaftaran:</strong> {{ \Carbon\Carbon::parse($santri->tanggal_pendaftaran)->format('d F Y') }}</p>
                                                            <p><strong>Tempat Lahir:</strong> {{ $santri->tempat_lahir }}</p>
                                                            <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($santri->tanggal_lahir)->format('d F Y') }}</p>
                                                            <p><strong>NISN:</strong> {{ $santri->nisn }}</p>
                                                            <p><strong>Alamat:</strong> {{ $santri->alamat }}</p>
                                                            <p><strong>Provinsi:</strong> {{ $santri->provinsi }}</p>
                                                            <p><strong>Kabupaten/Kota:</strong> {{ $santri->kabupaten_kota }}</p>
                                                            <p><strong>Kecamatan:</strong> {{ $santri->kecamatan }}</p>
                                                            <p><strong>Desa/Kelurahan:</strong> {{ $santri->desa_kelurahan }}</p>
                                                            <p><strong>Jumlah Hafalan:</strong> {{ $santri->jumlah_hafalan }} Juz</p>
                                                            <p><strong>Prestasi Al-Qur'an:</strong> {{ $santri->prestasi_alquran }}</p>
                                                            <p><strong>Prodi yang Dipilih:</strong> {{ $santri->prodi_dipilih }}</p>
                                                            <p><strong>Penandatangan:</strong> {{ $santri->penandatangan }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><strong>Asal Sekolah:</strong> {{ $santri->asal_sekolah }}</p>
                                                            <p><strong>Provinsi Sekolah Asal:</strong> {{ $santri->provinsi_sekolah_asal }}</p>
                                                            <p><strong>Kabupaten/Kota Sekolah Asal:</strong> {{ $santri->kabupaten_kota_sekolah_asal }}</p>
                                                            <p><strong>Kecamatan Sekolah Asal:</strong> {{ $santri->kecamatan_sekolah_asal }}</p>
                                                            <p><strong>Tahun Lulus:</strong> {{ $santri->tahun_lulus }}</p>
                                                            <p><strong>Nama Ayah:</strong> {{ $santri->nama_ayah }}</p>
                                                            <p><strong>Pendidikan Ayah:</strong> {{ $santri->pendidikan_ayah }}</p>
                                                            <p><strong>Pekerjaan Ayah:</strong> {{ $santri->pekerjaan_ayah }}</p>
                                                            <p><strong>Penghasilan Ayah:</strong> {{ $santri->penghasilan_ayah }}</p>
                                                            <p><strong>Nama Ibu:</strong> {{ $santri->nama_ibu }}</p>
                                                            <p><strong>Pendidikan Ibu:</strong> {{ $santri->pendidikan_ibu }}</p>
                                                            <p><strong>Pekerjaan Ibu:</strong> {{ $santri->pekerjaan_ibu }}</p>
                                                            <p><strong>Penghasilan Ibu:</strong> {{ $santri->penghasilan_ibu }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        
                                                        <div class="col-md-4">
                                                            <p><strong>Foto 3x4:</strong> <img src="{{ asset('assets/img/formpsb/' . $santri->foto_3x4) }}" class="img-fluid w-100 h-100"
                                                                alt=""></p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p><strong>Upload KK:</strong> <img src="{{ asset('assets/img/formpsb/' . $santri->upload_kk) }}" class="img-fluid w-100 h-100"
                                                                alt=""></p>
                                                        </div>
                                                        <div class="col-md-4"> 
                                                            <p><strong>Upload Akte:</strong> <img src="{{ asset('assets/img/formpsb/' . $santri->upload_akte) }}" class="img-fluid w-100 h-100"
                                                                alt=""></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endforeach
                            </tbody>



                        </table>
                    </div>
                </article>
            </article>
        </div>
    </section>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('.table').DataTable({
        "searching": true,
        "ordering": true,
        "paging": true
    });
});
</script>

</x-layout-admin>

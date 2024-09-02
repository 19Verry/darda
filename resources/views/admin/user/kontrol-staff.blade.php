<x-layout-admin>
    <header class="pagetitle">
        <h1>Kelola Staff</h1>
    </header><!-- End Page Title -->

    <section class="section">
        <div class="container">
            <article class="card">
                <header class="card-header">
                    <h5 class="card-title">Table Staff untuk Mengedit Konten Website Official</h5>
                    <p>Sebagai Super Admin, anda bisa membuat staff baru. Staff baru tersebut hanya bisa mengedit konten
                        sesuai yang anda pilih untuk mereka.</p>
                </header>
                <div class="card-body">

                    <div class="d-flex justify-content-end mt-2">
                        <button type="button" class="btn btn-login" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Staff
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <header class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </header>
                                <div class="modal-body">
                                    <form action="/staffs" method="post">
                                        @csrf
                                        <!-- Input untuk nama user -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama Staff</label>
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="Fulan bin Fulan">
                                            @error('name')
                                                <div class="text-danger ">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Staff</label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="Fulan@Fulan.com">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Input untuk password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input class="form-control" type="password" id="password" name="password"
                                                placeholder="Masukkan Password">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Input untuk konfirmasi password -->
                                        <div class="mb-3">
                                            <label for="konfirmasipassword" class="form-label">Konfirmasi
                                                Password</label>
                                            <input class="form-control" type="password" id="konfirmasipassword"
                                                name="password_confirmation" placeholder="Ketik Password Kembali">
                                            @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Hidden input untuk role -->
                                        <input type="hidden" id="role" name="role" value="staff">

                                        <!-- Checkbox untuk mengatur konten yang bisa diedit -->
                                        <fieldset class="mb-3">
                                            <label class="form-label">Konten apa saja yang bisa diedit?</label>
                                            <div id="kontenEdit">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="prodi"
                                                        name="edit_prodi" value="1">
                                                    <label class="form-check-label" for="prodi">Prodi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="program"
                                                        name="edit_program" value="1">
                                                    <label class="form-check-label" for="program">Program</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="kurikulum"
                                                        name="edit_kurikulum" value="1">
                                                    <label class="form-check-label" for="kurikulum">Kurikulum</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tahfidz"
                                                        name="edit_tahfidz" value="1">
                                                    <label class="form-check-label" for="tahfidz">Tahfidz</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="kesantrian"
                                                        name="edit_kesantrian" value="1">
                                                    <label class="form-check-label"
                                                        for="kesantrian">Kesantrian</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="akhlak"
                                                        name="edit_akhlak" value="1">
                                                    <label class="form-check-label" for="akhlak">Akhlak</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="bahasa"
                                                        name="edit_bahasa" value="1">
                                                    <label class="form-check-label" for="bahasa">Bahasa</label>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Tombol submit dan tombol tutup -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Name</th>
                                    <th rowspan="2">Email</th>
                                    <th rowspan="2">Dibuat</th>
                                    <th colspan="7">Edit Konten</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Prodi</th>
                                    <th>Program</th>
                                    <th>Kurikulum</th>
                                    <th>Tahfidz</th>
                                    <th>Kesantrian</th>
                                    <th>Akhlak</th>
                                    <th>Bahasa</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach ($staffs as $index => $staff)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $staff->name }}</td>
                                        <td>{{ $staff->email }}</td>
                                        <td>{{ (new \Carbon\Carbon($staff->published_at))->format('d F Y') }}</td>
                                        <td>{{ $staff->edit_prodi ? 'Bisa' : 'Tidak' }}</td>
                                        <td>{{ $staff->edit_program ? 'Bisa' : 'Tidak' }}</td>
                                        <td>{{ $staff->edit_kurikulum ? 'Bisa' : 'Tidak' }}</td>
                                        <td>{{ $staff->edit_tahfidz ? 'Bisa' : 'Tidak' }}</td>
                                        <td>{{ $staff->edit_kesantrian ? 'Bisa' : 'Tidak' }}</td>
                                        <td>{{ $staff->edit_akhlak ? 'Bisa' : 'Tidak' }}</td>
                                        <td>{{ $staff->edit_bahasa ? 'Bisa' : 'Tidak' }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm edit-btn"
                                                data-id="{{ $staff->id }}">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm delete-btn"
                                                data-id="{{ $staff->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </article>
            </article>
        </div>
    </section>
</x-layout-admin>

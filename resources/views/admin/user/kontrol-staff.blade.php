<x-layout-admin>
    <header class="pagetitle">
        <h1>Kelola Admin</h1>
    </header><!-- End Page Title -->

    <section class="section">
        <div class="container">
            <article class="card">
                <header class="card-header">
                    <h5 class="card-title">Table Admin untuk Mengedit Konten Website Official</h5>
                    <p>Sebagai Super Admin, anda bisa membuat Admin baru. Admin baru tersebut hanya bisa mengedit konten
                        sesuai yang anda pilih untuk mereka.</p>
                </header>
                <div class="card-body">

                    <div class="d-flex justify-content-end mt-2">
                        <button type="button" class="btn btn-login" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Kelola Admin
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
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select class="form-select" id="role" name="role" required>
                                                <option value="" disabled selected>Pilih Role</option>
                                                <option value="mudir"> Mudir</option>
                                                <option value="wakil_mudir">Wakil Mudir</option>
                                                <option value="kabid_kurikulum"> Kabid Kurikulum</option>
                                                <option value="kabid_tahfidz"> Kabid Tahfidz</option>
                                                <option value="kabid_kesantrian"> Kabid Kesantrian</option>
                                                <option value="tu"> Admin</option>
                                            </select>
                                        </div>


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
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first('error') }}
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
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Dibuat</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>

                            </thead>
                            <tbody class="align-middle">
                                @foreach ($staffs as $index => $staff)
                                @if ($staff->email != Auth::user()->email)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $staff->name }}</td>
                                            <td>{{ $staff->email }}</td>
                                            <td>{{ (new \Carbon\Carbon($staff->published_at))->format('d F Y') }}</td>
                                            <td><span class="role-label {{ $staff->role }}">{{ ucfirst(str_replace('_', ' ', $staff->role)) }}</span></td>
                                            <td>
                                                <div class="d-inline">
                                                    <!-- Button Edit -->
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $staff->id }}">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>

                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal{{ $staff->id }}"
                                                        tabindex="-1" aria-labelledby="editModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editModalLabel{{ $staff->id }}">Edit
                                                                        Staff</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.kelolastaff.update', $staff->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <!-- Input untuk nama -->
                                                                        <div class="mb-3">
                                                                            <label for="nama{{ $staff->id }}"
                                                                                class="form-label">Nama</label>
                                                                            <input class="form-control" type="text"
                                                                                id="nama{{ $staff->id }}"
                                                                                name="nama"
                                                                                value="{{ $staff->name }}" required>
                                                                        </div>
                                                                        <!-- Input untuk email -->
                                                                        <div class="mb-3">
                                                                            <label for="email{{ $staff->id }}"
                                                                                class="form-label">Email</label>
                                                                            <input class="form-control" type="email"
                                                                                id="email{{ $staff->id }}"
                                                                                name="email"
                                                                                value="{{ $staff->email }}" required>
                                                                        </div>
                                                                        <!-- Input untuk role -->
                                                                        <div class="mb-3">
                                                                            <label for="role{{ $staff->id }}"
                                                                                class="form-label">Role</label>
                                                                            <select class="form-select"
                                                                                id="role{{ $staff->id }}"
                                                                                name="role" required>
                                                                                <option value="" disabled
                                                                                    selected>Pilih Role</option>
                                                                                <option value="mudir"
                                                                                    {{ $staff->role == 'mudir' ? 'selected' : '' }}>
                                                                                    Mudir</option>
                                                                                <option value="wakil_kesantrian"
                                                                                    {{ $staff->role == 'wakil_kesantrian' ? 'selected' : '' }}>
                                                                                    Wakil Kesantrian</option>
                                                                                <option value="wakil_kurikulum"
                                                                                    {{ $staff->role == 'wakil_kurikulum' ? 'selected' : '' }}>
                                                                                    Wakil Kurikulum</option>
                                                                                <option value="tu"
                                                                                    {{ $staff->role == 'tu' ? 'selected' : '' }}>
                                                                                    TU</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Tutup</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Button Hapus -->
                                                    <form
                                                        action="{{ route('admin.kelolastaff.destroy', $staff->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus Staff ini?');"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"
                                                            title="hapus">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </article>
            </article>
        </div>
    </section>
</x-layout-admin>

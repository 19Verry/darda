<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Fasilitas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Fasilitas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title2">Edit Konten</h5>
                        <p>Form yang digunakan untuk Mengedit yang Ada Pada Fasilitas Web
                            Official.
                        </p>
                    </div>
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <div class="d-flex justify-content-end mt-3 mb-3">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Fasilitas
                            </button>
                        </div>
                        <!-- Modal tambah -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <!-- Input untuk upload gambar -->
                                            <div class="mb-3">
                                                <label for="imageUpload" class="form-label">Upload Gambar (Rasio gambar 9:16)</label>
                                                <input class="form-control" type="file" id="imageUpload" name="gambar" accept="image/*" required>
                                                @error('gambar')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Input untuk pilihan fasilitas -->
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Pilih Fasilitas</label>
                                                <select class="form-control" id="judul" name="judul">
                                                    <option value="" disabled selected>Pilih Fasilitas</option>
                                                    <option value="Masjid">Masjid</option>
                                                    <option value="Kelas">Ruang Kelas</option>
                                                    <option value="Laundry">Laundry</option>
                                                    <option value="Security">Security</option>
                                                    <option value="Asrama">Kamar Asrama</option>
                                                    <option value="UKS">UKS</option>
                                                    <option value="Kantin">Kantin</option>
                                                </select>
                                                @error('judul')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Input untuk deskripsi -->
                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label">Deskripsi </label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Masukkan deskripsi kegiatan"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal tambah -->


                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
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

                        <!-- Card with header and footer -->
                        <div class="card">
                            <div class="card-body mt-4">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>judul</th>      
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php foreach ($HomeFasilitas as $index => $item): ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td>
                                                    <img src="{{ asset('assets/img/fasilitas/' . $item->gambar) }}"
                                                        width="250" alt="" class="ms-3">
                                                </td>
                                                <td>
                                                    <input type="text" name="judul" class="form-control"
                                                        value="{{ $item->judul }}" readonly>
                                                </td>
                                                <td>
                                                    <div class="form-control"
                                                        style="height: 100px; width: 25vw ; margin: 0 auto; text-align: justify; overflow: auto; resize: none">
                                                        {!! htmlspecialchars_decode($item['deskripsi']) !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <!-- Button Hapus -->
                                                        <form action="{{ route('admin.fasilitas.destroy', $item->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus Fasilitas ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                title="hapus">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>

                                                        <!-- Button Edit -->
                                                        <div class="ms-2 text-center">
                                                            <button type="button" class="btn btn-warning btn-sm"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editModal{{ $item->id }}">
                                                                <i class="bi bi-pencil"></i>
                                                            </button>
                                                        </div>

                                                        <!-- Modal Edit -->
                                                        <div class="modal fade" id="editModal{{ $item->id }}"
                                                            tabindex="-1" aria-labelledby="editModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editModalLabel<?php echo $item->id; ?>">Edit
                                                                            Fasilitas</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="{{ route('admin.fasilitas.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <!-- Input untuk upload gambar -->
                                                                            <div class="mb-3">
                                                                                <label for="imageUpload{{ $item->id }}" class="form-label">Upload Gambar (Rasio gambar 9:16)</label>
                                                                                <input class="form-control" type="file" id="imageUpload{{ $item->id }}" name="gambar">
                                                                                @if ($item->gambar)
                                                                                <img src="{{ asset('assets/img/fasilitas/' . $item->gambar) }}" alt="Gambar Fasilitas" style="max-width: 100%; margin-top: 10px;">
                                                                                @endif
                                                                            </div>

                                                                            <!-- Input untuk judul fasilitas -->
                                                                            <div class="mb-3">
                                                                                <label for="judul{{ $item->id }}" class="form-label">Pilih Fasilitas</label>
                                                                                <select class="form-control" id="judul{{ $item->id }}" name="judul" required>
                                                                                    <option value="">Pilih Fasilitas</option>
                                                                                    <option value="masjid" {{ $item->judul == 'masjid' ? 'selected' : '' }}>Masjid</option>
                                                                                    <option value="kelas" {{ $item->judul == 'kelas' ? 'selected' : '' }}>Ruang Kelas</option>
                                                                                    <option value="laundry" {{ $item->judul == 'laundry' ? 'selected' : '' }}>Laundry</option>
                                                                                    <option value="security" {{ $item->judul == 'security' ? 'selected' : '' }}>Security</option>
                                                                                    <option value="asrama" {{ $item->judul == 'asrama' ? 'selected' : '' }}>Kamar Asrama</option>
                                                                                    <option value="uks" {{ $item->judul == 'uks' ? 'selected' : '' }}>UKS</option>
                                                                                    <option value="kantin" {{ $item->judul == 'kantin' ? 'selected' : '' }}>Kantin</option>
                                                                                </select>
                                                                                @if ($errors->has('judul'))
                                                                                <div class="text-danger">{{ $errors->first('judul') }}</div>
                                                                                @endif
                                                                            </div>

                                                                            <!-- Input untuk deskripsi -->
                                                                            <div class="mb-3">
                                                                                <label for="deskripsi{{ $item->id }}" class="form-label">Deskripsi</label>
                                                                                <textarea class="form-control" id="deskripsi{{ $item->id }}" name="deskripsi" rows="3" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                                                                                @if ($errors->has('deskripsi'))
                                                                                <div class="text-danger">{{ $errors->first('deskripsi') }}</div>
                                                                                @endif
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
            }
        }
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        document.addEventListener('DOMContentLoaded', function() {
            // Loop over all textarea elements with id pattern deskripsi-Prestasi
            document.querySelectorAll('textarea["deskripsi-tambah"]').forEach((textarea) => {
                ClassicEditor
                    .create(textarea, {
                        plugins: [Essentials, Bold, Italic, Font, Paragraph],
                        toolbar: {
                            items: [
                                'undo', 'redo', '|', 'bold', 'italic', '|',
                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                            ]
                        }

                    })
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        document.addEventListener('DOMContentLoaded', function() {
            // Loop over all textarea elements with id pattern deskripsi-{id}
            document.querySelectorAll('textarea[id^="deskripsi"]').forEach((textarea) => {
                ClassicEditor
                    .create(textarea, {
                        plugins: [Essentials, Bold, Italic, Font, Paragraph],
                        toolbar: {
                            items: [
                                'undo', 'redo', '|', 'bold', 'italic', '|',
                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                            ]
                        }
                    })
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>

</x-layout-admin>
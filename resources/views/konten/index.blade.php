<x-layout-admin>
    <header class="pagetitle">
        <h1>Kelola Konten</h1>
    </header><!-- End Page Title -->

    <section class="section">
        <div class="container">
            <article class="card">
                <header class="card-header">
                    <h5 class="card-title">Table Konten untuk Mengedit Konten Website Official</h5>
                    <p>Sebagai Admin, anda bisa membuat konten baru dan mengelola konten yang sudah ada.</p>
                </header>
                <div class="card-body">

                    <div class="d-flex justify-content-end mt-2">
                        <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Konten
                        </button>
                    </div>

                    <!-- Modal for Adding Content -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <header class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </header>
                                <div class="modal-body">
                                    <form id="addContentForm" action="/konten" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul Konten</label>
                                            <input class="form-control" type="text" id="judul" name="judul" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="caption" class="form-label">Caption</label>
                                            <textarea class="form-control caption-editor" id="caption" name="caption" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input class="form-control" type="file" id="gambar" name="gambar">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis" class="form-label">Jenis Konten</label>
                                            <input class="form-control" type="text" id="jenis" name="jenis" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="1">Aktif</option>
                                                <option value="0">Non-Aktif</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Table with DataTables -->
                <article class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <p class="text-warning mt-2">
                            Informasi: Table ini diisi dengan urutan data yang terbaru, sehingga data yang masuk akan diletak baris teratas!
                        </p>
                        
                        <table id="kontenTable" class="table table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Caption</th>
                                    <th>Gambar</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kontens as $konten)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $konten->judul }}</td>
                                        <td>{{ $konten->caption }}</td>
                                        <td>
                                            @if ($konten->gambar)
                                                <img src="{{ asset('storage/' . $konten->gambar) }}" width="100" alt="">
                                            @else
                                                Tidak Ada Gambar
                                            @endif
                                        </td>
                                        <td>{{ $konten->jenis }}</td>
                                        <td>{{ $konten->status ? 'Aktif' : 'Non-Aktif' }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $konten->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <!-- Modal for Editing Content -->
                                            <div class="modal fade" id="editModal{{ $konten->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $konten->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $konten->id }}">Edit Konten</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form id="editContentForm{{ $konten->id }}" action="{{ route('konten.update', $konten->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="judul{{ $konten->id }}" class="form-label">Judul</label>
                                                                    <input class="form-control" type="text" id="judul{{ $konten->id }}" name="judul" value="{{ $konten->judul }}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="caption{{ $konten->id }}" class="form-label">Caption</label>
                                                                    <textarea class="form-control caption-editor" id="caption{{ $konten->id }}" name="caption" rows="3" required>{{ $konten->caption }}</textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="gambar{{ $konten->id }}" class="form-label">Gambar</label>
                                                                    <input class="form-control" type="file" id="gambar{{ $konten->id }}" name="gambar">
                                                                    @if ($konten->gambar)
                                                                        <img src="{{ asset('storage/' . $konten->gambar) }}" width="100" alt="">
                                                                    @endif
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="jenis{{ $konten->id }}" class="form-label">Jenis</label>
                                                                    <input class="form-control" type="text" id="jenis{{ $konten->id }}" name="jenis" value="{{ $konten->jenis }}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="status{{ $konten->id }}" class="form-label">Status</label>
                                                                    <select class="form-select" id="status{{ $konten->id }}" name="status" required>
                                                                        <option value="1" {{ $konten->status ? 'selected' : '' }}>Aktif</option>
                                                                        <option value="0" {{ !$konten->status ? 'selected' : '' }}>Non-Aktif</option>
                                                                    </select>
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
                                            
                                            <!-- Button for Deleting Content -->
                                            <a href="{{ url('konten/delete/'.$konten->id) }}" class="btn btn-danger btn-sm" title="hapus">
                                                <i class="bi bi-trash"></i>
                                            </a>
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

    <!-- DataTables Initialization -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <script>
        // Initialize CKEditor for Adding Content
        let addEditor;
        ClassicEditor
            .create(document.querySelector('.caption-editor#caption'))
            .then(editor => {
                addEditor = editor; // Keep a reference to the editor instance for adding content
            })
            .catch(error => {
                console.error(error);
            });

        // Initialize CKEditor for Editing Content
        const initializeEditEditor = (id) => {
            ClassicEditor
                .create(document.querySelector(`.caption-editor#caption${id}`))
                .then(editor => {
                    window[`editEditor${id}`] = editor; // Keep a reference to the editor instance for editing content
                })
                .catch(error => {
                    console.error(error);
                });
        };

        // Initialize editors for all existing edit modals
        @foreach ($kontens as $konten)
            initializeEditEditor({{ $konten->id }});
        @endforeach

        // Ensure the content is set when add form is submitted
        document.getElementById('addContentForm').addEventListener('submit', function() {
            const captionInput = document.querySelector('#caption');
            captionInput.value = addEditor.getData(); // Set the textarea value to CKEditor content
        });

        // Ensure the content is set when edit form is submitted
        @foreach ($kontens as $konten)
            document.getElementById(`editContentForm{{ $konten->id }}`).addEventListener('submit', function() {
                const captionInput = document.querySelector(`#caption{{ $konten->id }}`);
                captionInput.value = window[`editEditor{{ $konten->id }}`].getData(); // Set the textarea value to CKEditor content
            });
        @endforeach

        $(document).ready(function() {
            $('#kontenTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        });
    </script>
</x-layout-admin>

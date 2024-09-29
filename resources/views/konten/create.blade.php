<x-layout-admin>
    <header class="pagetitle">
        <h1>Tambah Konten Baru</h1>
    </header>

    <section class="section">
        <div class="container">
            <article class="card">
                <header class="card-header">
                    <h5 class="card-title">Form Tambah Konten</h5>
                </header>
                <div class="card-body">
                    <form action="{{ route('konten.store') }}" method="post" enctype="multipart/form-data">
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
                            <a href="{{ url('/konten') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#caption'))
            .then(editor => {
                window.editor = editor; // Keep a reference to the editor instance
            })
            .catch(error => {
                console.error(error);
            });

        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            // Update the textarea with the editor's data before submitting
            if (window.editor) {
                window.editor.update(); // Ensure editor data is synced
            }
            
            if (!form.checkValidity()) {
                event.preventDefault(); // Prevent form submission if invalid
                const firstInvalidElement = form.querySelector(':invalid');
                if (firstInvalidElement) {
                    firstInvalidElement.focus(); // Focus on the first invalid element
                }
            }
        });
    </script>
</x-layout-admin>

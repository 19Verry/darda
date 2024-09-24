<x-layout-admin>
    <div class="pagetitle">
        <h1>Ubah Password</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-3">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Ubah Password</h5>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.kelolastaff.ubahpassword') }}" method="POST">
                            @csrf <!-- Token CSRF Protection -->

                            <!-- Old Password -->
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Password Lama</label>
                                <input type="password" class="form-control" id="oldPassword" name="old_password" required>
                            </div>

                            <!-- New Password -->
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="newPassword" name="new_password" required>
                            </div>

                            <!-- Confirm New Password -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="confirmPassword" name="new_password_confirmation" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login">Ubah Password</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout-admin>

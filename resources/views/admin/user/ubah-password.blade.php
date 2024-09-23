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

                        <form action="/ubah-password" method="POST">
                            <!-- Old Password -->
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Password Lama</label>
                                <input type="password" class="form-control" id="oldPassword" name="old_password"
                                    required>
                            </div>

                            <!-- New Password -->
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="newPassword" name="new_password"
                                    required>
                            </div>

                            <!-- Confirm New Password -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirm_password"
                                    required>
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

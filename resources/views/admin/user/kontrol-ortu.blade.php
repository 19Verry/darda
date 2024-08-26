<x-layout-admin>
    <div class="pagetitle">
        <h1>Kelola Akun Oraang Tua </h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title2">Table user untuk melihat akun orang tua santri </h5>
                        <p>Sebagai Super Admin, anda bisa melihat akun orang tua, yang dimana anda juga dapat melihat password dari akun orang tua tersebut
                        </p>
                    </div>
                    <div class="card-body">
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-body mt-4">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="text" name="username" class="form-control" value="Budiyono" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" name="email" class="form-control" value="budiyono@gmail.com" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" name="email" class="form-control" value="budiyono123" readonly>
                                                </td>
                                            </tr>
                                            <!-- Tambahkan baris lain sesuai kebutuhan -->
                                        </tbody>
                                    </table>

                                </div>
                               
                            </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout-admin>

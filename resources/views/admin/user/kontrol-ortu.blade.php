<x-layout-admin>
    <div class="pagetitle">
        <h1>Kelola Akun Orang Tua</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Table user untuk melihat akun orang tua santri</h5>
                        <p>Sebagai Super Admin, anda bisa melihat akun orang tua.</p>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body mt-2">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-sm table-hovered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($calonsantri as $index => $santri)
                                            <tr>
                                                <td>{{ $index + 1 }}</td> <!-- Penomoran otomatis -->
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="fw-bold">{{ $santri->name }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span>{{ $santri->email }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span>{{ \Carbon\Carbon::parse($santri->created_at)->format('d M Y') }}</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Menambahkan CDN DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true
            });
        });
    </script>
    
</x-layout-admin>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TouLEOS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('porterassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('porterassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <link href="{{ asset('porterassets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('alertassets/css/boostrap.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family: Poppins, sans-serif;">Permintaan Pemesanan</h4><button
                        class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p style="font-family: Poppins, sans-serif;">Nama ingin memesan jasa anda sebagai porter</p><label
                        class="form-label" style="font-family: Poppins, sans-serif;">Harga/Menit :&nbsp;</label><input
                        type="number" style="font-family: Poppins, sans-serif;padding-right: 0px;margin-right: -7px;">
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button"
                        style="background: #1cda18;">Terima</button><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal"
                        style="--bs-danger: #dc3545;--bs-danger-rgb: 220,53,69;background: #ee2626;color: rgb(255,255,255);">Tolak</button>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts.nbporter')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pesanan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pendapatan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Rp.49.260</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pelanggan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Hari ini</a></li>
                                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                                        <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Hari ini</a></li>
                                        <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                                        <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Pemesanan terbaru <span>| Hari ini</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nomor</th>
                                                <th scope="col">Pelanggan</th>
                                                <th scope="col">Waktu</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a>1</a></th>
                                                <td>Roma</td>
                                                <td><a class="text-primary">30 menit</a></td>
                                                <td>Rp.15.000</td>
                                                <td><span class="badge bg-success">Selesai</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Gion</td>
                                                <td><a href="#" class="text-primary">-</a></td>
                                                <td>-</td>
                                                <td><span class="badge bg-warning">Menunggu</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Boutje</td>
                                                <td><a href="#" class="text-primary">60 menit</a></td>
                                                <td>Rp.30.000</td>
                                                <td><span class="badge bg-success">Selesai</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Vallerie</td>
                                                <td><a href="#" class="text-primar">-</a></td>
                                                <td>-</td>
                                                <td><span class="badge bg-danger">Ditolak</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angel</td>
                                                <td><a href="#" class="text-primary">25 menit</a></td>
                                                <td>Rp.10.000</td>
                                                <td><span class="badge bg-success">Selesai</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            </div>

            </div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="color: #FFFFFF;">
        <div class="copyright">
            &copy; Copyright <strong><span>TouLEOS</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('porterassets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('porterassets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/simple-datatables/simple-datatables.js') }}">
    </script>
    <script src="{{ asset('porterassets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('porterassets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('porterassets/js/main.js') }}"></script>
    <script src="{{ asset('alertassets/js/boostrap.min.js') }}"></script>

</body>

</html>

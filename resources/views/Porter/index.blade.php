<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TouLEOS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('porterassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('porterassets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/boxicons/css/boxicons.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('porterassets/vendor/simple-datatables/style.css') }}"
        rel="stylesheet">

    <link href="{{ asset('porterassets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    @extends('layouts.nbporter')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Beranda</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('porter') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

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
                                    <h5 class="card-title">Pesanan <span>| Hari ini</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-muted small pt-2 ps-1">Peningkatan</span> <span
                                                id="Judulkita" class="text-success small pt-1 fw-bold">12%</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

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
                                    <h5 class="card-title">Pendapatan <span>| Bulan ini</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Rp.49.260</h6>
                                            <span class="text-muted small pt-2 ps-1">Peningkatan</span> <span
                                                id="Judulkita" class="text-success small pt-1 fw-bold">8%</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

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
                                    <h5 class="card-title">Pelanggan <span>| Tahun ini</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-muted small pt-2 ps-1">Penurunan</span> <span
                                                class="text-danger small pt-1 fw-bold">12%</span>

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

                                <div class="card-body">
                                    <h5 class="card-title">Laporan <span>/Hari ini</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Pesanan',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Pendapatan',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Pelanggan',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z",
                                                        "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z",
                                                        "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z",
                                                        "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
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
                                                <th scope="col">#</th>
                                                <th scope="col">Pelanggan</th>
                                                <th scope="col">Waktu</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Roma</td>
                                                <td><a href="#" class="text-primary">30 menit</a></td>
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
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                </div>
            </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
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

</body>

</html>
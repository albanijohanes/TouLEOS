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
    <link rel="stylesheet"
        href="{{ asset ('merchantassets/css/Profile-Edit-Form-styles.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Profile-Edit-Form.css') }}">

    <link href="{{ asset('porterassets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('alertassets/css/boostrap.min.css') }}" rel="stylesheet">

</head>

<body>
    @extends('layouts.nbporter')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Promosi</h1>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
                    id="riwayat">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"
                                    style="font-family: Poppins, sans-serif;text-align: center;padding-right: 0px;">
                                    Edit Detail Dagangan</h4><button class="close" type="button" aria-label="Close"
                                    data-dismiss="modal" style="color: rgb(0,0,0);"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form data-bss-recipient="67b465af92ed4ffdcc0537eaadc6dd61"
                                            style="font-family: Poppins, sans-serif;">
                                            <div class="form-control-plaintext" type="text"
                                                style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                <label
                                                    style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 12px;">
                                                    Nama Bahan/Barang
                                                </label>
                                                <input class="form-control" type="text"
                                                    style="font-family: Poppins, sans-serif;font-size: 12px;">
                                            </div>
                                            <div class="form-control-plaintext" type="text"
                                                style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Satuan
                                                </label>
                                                <input class="form-control" type="text"
                                                    style="font-family: Poppins, sans-serif;font-size: 12px;">
                                            </div>
                                            <div class="form-control-plaintext" type="text"
                                                style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Harga
                                                </label>
                                                <input class="form-control" type="number"
                                                    style="font-family: Poppins, sans-serif;font-size: 12px;">
                                            </div>
                                            <div class="form-control-plaintext" type="text"
                                                style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Deskripsi
                                                </label>
                                                <textarea class="form-control"
                                                    style="font-family: Poppins, sans-serif;font-size: 12px;">
                                                    </textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-12">
                            @forelse($produk as $row)
                                @if($row->status === 'aktif')
                                    <div class="card info-card customers-card">

                                        <div class="card-body">
                                            <h5 class="card-title">Daftar Promosi</h5>

                                            <div class="d-flex align-items-center">
                                                <a class="list-group-item list-group-item-action flex-column align-items-start"
                                                    href="#" style="font-family: Poppins, sans-serif;">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1" style="font-size: 15px;">
                                                            {{ $row->merchant->nama }}</h5>
                                                    </div>
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1" style="font-size: 15px;">
                                                            Nama Bahan
                                                            :{{ $row->title }}</h5>
                                                    </div>
                                                    <p class="mb-1" style="font-size: 13px;">
                                                        Rp. {{ $row->harga }}
                                                    </p>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @empty
                                <div class="card info-card customers-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Belum ada promosi</h5>

                                        <div class="d-flex align-items-center">
                                            <a class="list-group-item list-group-item-action flex-column align-items-start"
                                                href="#" style="font-family: Poppins, sans-serif;">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1" style="font-size: 15px;">
                                                    </h5>
                                                </div>
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1" style="font-size: 15px;"></h5>
                                                </div>
                                                <p class="mb-1" style="font-size: 13px;">
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
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
    <script src="{{ asset('merchantassets/js/Profile-Edit-Form-profile.js') }}"></script>
    <script src="{{ asset('porterassets/js/main.js') }}"></script>
    <script src="{{ asset('alertassets/js/boostrap.min.js') }}"></script>

</body>

</html>

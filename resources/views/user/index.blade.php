<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TouLEOS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrapicons/bootstrapicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<style>
    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }
    }

</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="#hero">
                    <img src="{{ asset('assets/img/logo.png') }}">
                </a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#histori">Riwayat</a></li>
                    <li><a class="nav-link scrollto" href="#about">Promosi</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('profiluser') }}">Profil</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('logout') }}">KELUAR</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Selalu Siap Melayani Anda</h1>
                    <h2>Silahkan Melakukan Pemesanan Dengan Menekan Tombol Layanan</h2>
                    <div><a href="#services" class="btn-get-started scrollto">Layanan</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Layanan</h2>
                    <p>Pemesanan Layanan dapat dengan Memasukkan Kode Porter</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <img src="{{ asset ('assets/img/nomor.png') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">Pemesanan Dengan Kode Porter</a></h4>
                            <p>Masukkan Nomor ID Porter dan tekan PESAN</p>
                            <form action="{{ route('sendRequest') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="porter_id">Nomor ID Porter</label>
                                    <br>
                                    <input type="text" id="porter_id" name="porter_id" required>
                                </div>
                                <br><br>
                                <button type="submit" class="btn-pesan">PESAN</button>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- History Section -->
        <section id="histori" class="histori">
            <div class="container mt-5">
                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-dark">No.</th>
                                <th class="text-dark">Tanggal</th>
                                <th class="text-dark">Waktu Mulai</th>
                                <th class="text-dark">Waktu Selesai</th>
                                <th class="text-dark">Harga/Menit</th>
                                <th class="text-dark">Total</th>
                                <th class="text-dark">Status</th>
                                <th class="text-dark">Pembatalan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($serviceRequests as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->tanggal }}</td>
                                    <td>{{ $row->waktu_mulai }}</td>
                                    <td>{{ $row->waktu_selesai }}</td>
                                    <td>{{ $row->harga }}</td>
                                    <td>{{ $row->total }}</td>
                                    <td>{{ $row->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Porter/Asisten Berbelanja</h3>
                        <p class="fst-italic">
                            Porter atau asisten berbelanja adalah masyarakat yang menawarkan jasa dengan tugas yang
                            bervariasi:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>Mengangkat Barang Belanjaan</li>
                            <li><i class="bi bi-check-circle"></i>Mengarahkan Pengunjung Pasar atau sebagai Tour Guide
                            </li>
                            <li><i class="bi bi-check-circle"></i>Menawarkan produk dagangan dari Merchant atau Pedagang
                                Lapak</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer-contact">
                            <h3>TouLEOS</h3>
                            <p>
                                Universitas Sam Ratulangi<br>
                                Bahu, Malalayang, Kota Manado, Sulawesi Utara<br>
                                Indonesia <br><br>
                                <strong>Phone:</strong> +62895804049310<br>
                                <strong>Email:</strong> romanouke@gmail.com<br>
                            </p>
                        </div>

                        <div class="col-lg-2 col-md-7 footer-links">
                            <h4>Pintasan</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#histori">Riwayat</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#about">Promosi</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('profiluser') }}">Profil</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

                <div class="copyright-wrap d-md-flex py-4">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>TouLEOS</span></strong>. All Rights Reserved
                        </div>

                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>

                </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>

        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="https://cdn.rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

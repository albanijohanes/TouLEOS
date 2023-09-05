<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Beranda-Merchant</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset ('merchantassets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Black-Navbar.css') }}>
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Form-Select---Full-Date---Month-Day-Year.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/gradient-navbar-styles.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/gradient-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Hero-Clean-Reverse-images.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/css/lightpick.min.css">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Navbar---Apple-navbar---apple.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Navbar---Apple.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Navbar-by-Aaron.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/styles.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body navbar-dark" id="app-navbar">
        <div class="container-fluid"><img src="{{ asset('merchantassets/img/Logo web Tou Leos (3).png') }}" style="width: 50px;"><a class="navbar-brand" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('beranda_merchant') }}">
                        Beranda
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('profile_merchant') }}">
                            Profil Anda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('logout') }}" style="color: rgb(252,0,0);">
                            Keluar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold" style="font-size: 39px;padding-right: 0px;font-family: Poppins, sans-serif;">
                        Selamat datang
                    </h2>
                    <p class="my-3" style="font-family: Poppins, sans-serif;">
                        Layanang Merchant/Pedagang memungkinkan pedagang melakukan promosi dagangan ke Porter
                    </p>
                    <a class="btn btn-primary btn-lg me-2" type="button" data-bs-toggle="modal" data-bs-target="#addPromosi" style="background: rgba(109,205,61,0.9);font-family: Poppins, sans-serif;font-size: 15px;border-radius: 15px;">
                        Tambah Promosi
                    </a>
                    <div class="modal fade" role="dialog" tabindex="-1" id="addPromosi" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="font-family: Poppins, sans-serif;">
                                        Tambah Promosi Dagangan
                                    </h4>
                                    <button class="close" type="button" aria-label="Close" data-dismiss="modal" style="color: rgb(0,0,0);">
                                        <span aria-hidden="true">
                                            ×
                                        </span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form data-bss-recipient="67b465af92ed4ffdcc0537eaadc6dd61">
                                                <div class="form-group">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Hari/Tanggal
                                                </label>
                                                    <input class="form-control" type="date" style="font-family: Poppins, sans-serif;">
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Nama Bahan/Barang
                                                </label>
                                                    <input class="form-control" type="text" style="font-family: Poppins, sans-serif;">
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Satuan
                                                </label>
                                                    <input class="form-control" type="text" style="font-family: Poppins, sans-serif;">
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Harga
                                                </label>
                                                    <input class="form-control" type="number" style="font-family: Poppins, sans-serif;">
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                    Deskripsi
                                                </label>
                                                    <textarea class="form-control" style="font-family: Poppins, sans-serif;">
                                                </textarea>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-dark" style="width: 100%;background: rgba(105,72,45,0.9);" type="submit">Tambah</button></div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 hide-ele">
                                            <img style="width: 100%;margin-top: 38px;" src="{{ asset ('merchantassets/img/20230712_124645.jpg') }}">
                                            <img style="width: 100%;margin-top: 50px;" src="{{ asset ('merchantassets/img/20230712_124645.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#riwayat"  role="button" href="#" style="background: rgba(109,205,61,0.9);color: rgb(255,255,255);font-size: 15px;font-family: Poppins, sans-serif;border-radius: 15px;">
                        Riwayat
                    </a>
                    <div class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" id="riwayat">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="font-family: Poppins, sans-serif;text-align: center;padding-right: 0px;">Edit Detail Dagangan</h4><button class="close" type="button" aria-label="Close" data-dismiss="modal" style="color: rgb(0,0,0);"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form data-bss-recipient="67b465af92ed4ffdcc0537eaadc6dd61" style="font-family: Poppins, sans-serif;">
                                                <div class="form-group" style="font-size: 12px;">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 12px;">Status Promosi</label><select class="form-control" style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                        <optgroup label="This is a group">
                                                            <option value="12" selected="">
                                                                Tidak Aktif
                                                            </option>
                                                            <option value="13">
                                                                Aktif
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 12px;">
                                                        Nama Bahan/Barang
                                                    </label>
                                                    <input class="form-control" type="text" style="font-family: Poppins, sans-serif;font-size: 12px;">
                                                </div>
                                                <div class="form-group" style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                        Satuan
                                                    </label>
                                                    <input class="form-control" type="text" style="font-family: Poppins, sans-serif;font-size: 12px;">
                                                </div>
                                                <div class="form-group" style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                        Harga
                                                    </label>
                                                    <input class="form-control" type="number" style="font-family: Poppins, sans-serif;font-size: 12px;">
                                                </div>
                                                <div class="form-group" style="font-size: 12px;font-family: Poppins, sans-serif;">
                                                    <label style="font-family: Poppins, sans-serif;font-weight: bold;">
                                                        Deskripsi
                                                    </label>
                                                    <textarea class="form-control" style="font-family: Poppins, sans-serif;font-size: 12px;">
                                                    </textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-dark" style="width: 100%;background: rgba(105,72,45,0.9);font-size: 12px;font-family: Poppins, sans-serif;" type="submit">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 hide-ele">
                                            <img style="width: 100%;" src="{{ asset ('merchantassets/img/20230712_124645.jpg') }}">
                                            <img style="width: 100%;" src="{{ asset ('merchantassets/img/20230712_124645.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5">
                    <img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="{{ asset ('merchantassets/img/20230712_124645.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <h1 style="text-align: center;font-size: 16px;font-family: Poppins, sans-serif;font-weight: bold;margin-top: 15px;">
        Promosi Aktif
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action flex-column align-items-start" href="#" style="font-family: Poppins, sans-serif;">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="font-size: 12px;">
                                Nama Bahan
                                :</h5>
                        </div>
                        <p class="mb-1" style="font-size: 13px;">
                            Paragraph
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action flex-column align-items-start" href="#" style="font-family: Poppins, sans-serif;">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="font-size: 12px;">
                                Nama Bahan:
                            </h5>
                        </div>
                        <p class="mb-1" style="font-size: 12px;">
                            Paragraph
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h1 style="text-align: center;font-size: 14px;font-family: Poppins, sans-serif;font-weight: bold;margin-top: 81px;">Riwayat</h1>
    <div class="row" style="text-align: center;">
        <div class="col-sm-12" style="font-size: 12px;font-family: Poppins, sans-serif;margin-bottom: 10px;margin-right: -38px;padding-right: 40px;"><select class="display-inline-block" style="padding-right: 0px;margin-right: 5px;">
                <option value="1" selected="">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select><select class="display-inline-block">
                <option value="1" selected="">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select><select class="display-inline-block" style="margin-left: 5px;">
                <option value="2023" selected="">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
            </select></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group"><a class="list-group-item list-group-item-action flex-column align-items-start" href="#" style="font-family: Poppins, sans-serif;">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="font-size: 12px;">
                                Nama Bahan
                            </h5>
                            <span class="badge rounded-pill bg-primary align-self-center">
                                Aktif
                            </span>
                        </div>
                        <p class="mb-1" style="font-size: 12px;">
                            Paragraph
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action flex-column align-items-start" href="#" style="font-family: Poppins, sans-serif;">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="font-size: 12px;">
                                Nama Bahan
                            </h5>
                            <span class="badge rounded-pill bg-primary align-self-center">
                                Aktif
                            </span>
                        </div>
                        <p class="mb-1" style="font-size: 12px;">
                            Paragraph
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset ('merchantassets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src="{{ asset ('merchantassets/js/Date-Range-Picker-datepicker.js') }}"></script>
    <script src="{{ asset ('merchantassets/js/Date-Range-Picker-style.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset ('merchantassets/js/Navbar---Apple-navbar---apple.js') }}"></script>
    <script src="{{ asset ('merchantassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset ('merchantassets/js/smart-forms.min.js') }}"></script>
    <script src="{{ asset ('merchantassets/js/Auto-Modal-Popup-modal.js') }}"></script>
</body>

</html>

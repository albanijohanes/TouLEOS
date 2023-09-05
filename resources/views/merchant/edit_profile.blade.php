<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EDIT-PROFIL</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet"
        href="{{ asset ('merchantassets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Black-Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/gradient-navbar-styles.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/gradient-navbar.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('merchantassets/css/Navbar---Apple-navbar---apple.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Navbar---Apple.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Navbar-by-Aaron.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('merchantassets/css/Profile-Edit-Form-styles.css') }}">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Profile-Edit-Form.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body navbar-dark" id="app-navbar">
        <div class="container-fluid">
            <img src="{{ asset ('merchantassets/img/Logo%20web%20Tou%20Leos%20(3).png') }}" style="width: 50px;">
            <a class="navbar-brand" href="#">
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                <span class="visually-hidden">
                    Toggle navigation
                </span>
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('beranda_merchant') }}"
                            style="font-family: Poppins, sans-serif;">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('profile_merchant') }}"
                            style="font-family: Poppins, sans-serif;">
                            Profil Anda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('logout') }}"
                            style="color: rgb(252,0,0);font-family: Poppins, sans-serif;">
                            Keluar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container profile profile-view" id="profile" style="margin-right: 13px;">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert">
                    <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert">
                    </button>
                    <span>
                        Profile save with success
                    </span>
                </div>
            </div>
        </div>
        <form>
            <div class="row profile-row" style="padding-top: 0px;margin-top: 19px;padding-right: 0px;">
                <div class="col-md-8" style="margin-right: 0px;padding-right: 0px;padding-left: 0px;margin-left: 0px;">
                    <h1 style="font-family: Poppins, sans-serif;text-align: center;">
                        Edit Profil Anda
                    </h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" style="font-family: Poppins, sans-serif;">
                                    <strong>
                                        Nama
                                    </strong>
                                </label>
                                <input class="form-control" type="text" name="firstname"
                                    value="{{ auth()->user()->nama }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" style="font-family: Poppins, sans-serif;">
                                    <strong>
                                        Nomor HP
                                    </strong>
                                </label>
                                <input class="form-control" type="text" name="lastname"
                                    value="{{ auth()->user()->no_hp }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" style="font-family: Poppins, sans-serif;">
                            <strong>
                                Email
                            </strong>
                        </label>
                        <input class="form-control" type="email" autocomplete="off"
                            value="{{ auth()->user()->merchant->email }}" name="email" required>
                    </div>
                    <div style="font-size: 12px;" class="form-group mb-3">
                        <label class="form-label"
                            style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 16px;">
                            Jenis Kelamin
                        </label>
                        <select class="form-select" style="font-size: 16px;font-family: Poppins, sans-serif;">
                            <optgroup label="Jenis Kelamin">
                                <option value=Laki-laki" selected="">
                                    Laki-laki
                                </option>
                                <option value="Perempuan">
                                    Perempuan
                                </option>
                            </optgroup>
                        </select></div>
                    <div class="form-group mb-3">
                        <label class="form-label" style="font-family: Poppins, sans-serif;">
                            <strong>
                                Alamat
                            </strong>
                        </label>
                        <input class="form-control" type="text" autocomplete="off"
                            value="{{ auth()->user()->merchant->alamat }}" name="text" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" style="font-family: Poppins, sans-serif;">
                                    <strong>
                                        KTP (Kartu Tanda Penduduk)
                                    </strong>
                                </label>
                                <input class="form-control" type="file" style="font-family: Poppins, sans-serif;"
                                    value="{{ auth()->user()->merchant->ktp }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" style="font-family: Poppins, sans-serif;">
                                    <strong>
                                        SIUP (Surat Ijin Usaha Perdagangan)
                                    </strong>
                                </label>
                                <input class="form-control" type="file" style="font-family: Poppins, sans-serif;"
                                    value="{{ auth()->user()->merchant->siup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" style="font-family: Poppins, sans-serif;">
                                    <strong>
                                        Nama Pengguna (<em>Username</em>)
                                    </strong>
                                </label>
                                <input class="form-control" type="text" value="{{ auth()->user()->username }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" style="font-family: Poppins, sans-serif;">
                                    <strong>
                                        Kata Sandi
                                    </strong>
                                </label>
                                <input class="form-control" type="password" name="confirmpass" autocomplete="off"
                                    value="{{ auth()->user()->password }}" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-right">
                            <button class="btn btn-primary form-btn" type="submit"
                                style="font-family: Poppins, sans-serif;background: rgba(109,205,61,0.9);">
                                SIMPAN
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset ('merchantassets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('merchantassets/js/Navbar---Apple-navbar---apple.js') }}"></script>
    <script src="{{ asset ('merchantassets/js/Profile-Edit-Form-profile.js') }}"></script>
</body>

</html>

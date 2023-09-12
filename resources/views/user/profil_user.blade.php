<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profil User</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
</head>

<body
    style="background: linear-gradient(rgba(109,205,61,0.9) 0%, rgba(105,72,45,0.9) 100%), url(&quot;assets/img/20230712_124645.jpg&quot;) center / cover no-repeat;">
    <div class="container-fluid">
        <h3 class="text-dark mb-4"
            style="text-align: center;font-family: Poppins, sans-serif;margin-top: 10px;font-size: 37px;color: var(--bs-body-bg);">
            Profil Anda</h3>
        <div class="card shadow mb-3" style="background: rgb(255,255,255);border-radius: 12px;">
            <div class="card-body" style="background: rgb(255,255,255);border-radius: 12px;">
                <form>
                    <div class="row"
                        style="margin-bottom: 25px;text-align: left;font-family: Poppins, sans-serif;font-size: 12px;">
                        <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-xxl-10 align-self-center">
                            <div class="row">
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="name"><strong>Nama
                                                Lengkap</strong></label><input class="form-control-plaintext"
                                            type="text" value="{{ auth()->user()->nama }}" readonly=""></div>
                                </div>
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="username"><strong>Nomor
                                                HP</strong></label><input class="form-control-plaintext" type="text"
                                            value="{{ auth()->user()->no_hp }}" readonly=""></div>
                                    <div class="mb-3"><label class="form-label" for="city"><strong>Jenis
                                                Kelamin</strong></label><input class="form-control-plaintext"
                                            type="text" value="{{ auth()->user()->jk }}" readonly=""></div>
                                    <div class="mb-3"><label class="form-label" for="username"><strong>Nama Pengguna
                                                (<em>Username</em>)</strong></label><input
                                            class="form-control-plaintext" type="text"
                                            value="{{ auth()->user()->username }}" readonly=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="text-align: right;margin-top: 5px;">
                            <button class="btn btn-primary btn-sm" id="submitBtn" type="submit"
                                style="margin-right: 10px;font-size: 12px;background: rgba(109,205,61,0.9);"><a class="text-decoration-none"
                                    href="{{ route('index') }}">KEMBALI</button></div>
                                    <!-- <button class="btn btn-primary btn-sm"
                                id="submitBtn-1" type="submit"
                                style="font-size: 12px;background: rgba(109,205,61,0.9);"><a
                                    href="{{ route('edituser') }}">EDIT</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset ('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
</body>

</html>
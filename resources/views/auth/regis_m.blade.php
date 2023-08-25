<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ludens - Register (copy) (copy)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Register.css">
</head>

<body style="background: linear-gradient(rgba(105,72,45,0.9) 0%, rgba(109,205,61,0.9) 100%), url(&quot;assets/img/20230712_124645.jpg&quot;) top / cover no-repeat;">
    <div class="container" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
        <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
            <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 36px;font-family: Poppins, sans-serif;">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="text-dark mb-4">PENDAFTARAN AKUN !</h4>
                    </div>
                    <form class="user">
                        <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Nama Lengkap" required=""></div>
                        <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Nomor HP" required=""></div>
                        <div class="mb-3"><select class="form-select">
                                <optgroup label="Jenis Kelamin">
                                    <option value="12" selected="">Laki-laki</option>
                                    <option value="13">Perempuan</option>
                                </optgroup>
                            </select></div>
                        <div class="mb-3"></div>
                        <div class="mb-3"></div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="Nama Pengguna (Username)" required=""></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="password" placeholder="Kata Sandi" required=""></div>
                        </div>
                        <p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                        <div class="mb-3"><label class="form-label">KTP (Kartu Tanda Penduduk)</label><input class="form-control" type="file"></div>
                        <div class="mb-3"><label class="form-label">SIUP (Surat Ijin Usaha Perdagangan) atau sejenis</label><input class="form-control" type="file"></div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit" style="background: rgba(109,205,61,0.9);margin-bottom: 16px;">DAFTAR</button>
                        <div class="text-center"><a class="small" href="login.html">Sudah punya akun? Masuk</a></div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
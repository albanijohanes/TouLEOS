<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PENDAFTARAN-PORTER</title>
    <link rel="stylesheet" href="{{ asset('regisassets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('regisassets/css/Ludens-Users---2-Register.css') }}">
</head>

<body style="background: linear-gradient(rgba(105,72,45,0.9) 0%, rgba(109,205,61,0.9) 100%), url(&quot;assets/img/20230712_124645.jpg&quot;) top / cover no-repeat;">
    <div class="container" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
        <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
            <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 36px;font-family: Poppins, sans-serif;">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="text-dark mb-4">PENDAFTARAN AKUN {{ $role }}!</h4>
                    </div>
                    <form class="user" method="POST" action="{{ route('register.post', ['role' => 'porter']) }}">
                        @csrf
                        <input type="hidden" name="role" value="{{ $role }}">
                        <div class="mb-3">
                            <input id="nama" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" type="text" placeholder="Nama Lengkap" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="no_hp" name="no_hp" class="form-control form-control-user @error('no_hp') is-invalid @enderror" type="text" placeholder="Nomor HP" required=
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <input id="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" type="text" placeholder="Email" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="alamat" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" type="text" placeholder="Alamat" required>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3"><select class="form-select @error('jk') is-invalid @enderror" name="jk">
                                <optgroup label="Jenis Kelamin">
                                    <option value="Laki-laki" selected="">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </optgroup>
                            </select>
                            @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3"></div>
                        <div class="mb-3"></div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="username" name="username" class="form-control form-control-user @error('username') is-invalid @enderror" type="text" placeholder="Nama Pengguna (Username)" required>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input name="password" class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="password" placeholder="Kata Sandi" required>
                                @error('password')
                                    <div id="passwordErrorMsg" class="text-danger" style="display:none;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <p>Paragraph</p>
                        <div class="mb-3">
                            <label class="form-label">KTP (Kartu Tanda Penduduk)</label>
                            <input id="ktp" name="ktp" class="form-control @error('ktp') is-invalid @enderror" type="file">
                            @error('ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SKKB (Surat Keterangan Kelakuan Baik) atau sejenis</label>
                            <input id="skkb" name="skkb" class="form-control @error('skkb') is-invalid @enderror" type="file">
                            @error('skkb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit" style="background: rgba(109,205,61,0.9);margin-bottom: 16px;">
                            DAFTAR
                        </button>
                        <div class="text-center"><a class="small" href="{{ route('loginporter') }}">Sudah punya akun? Masuk</a></div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('regisassets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>

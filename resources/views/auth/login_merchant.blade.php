<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-MERCHANT</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('alertassets/css/alert.css') }}" rel="stylesheet">
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ecf0f3;
        }

    </style>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

    </style>
    <style>
        .btn-back {
            display: inline-block;
            background-color: #f2f2f2;
            color: #333;
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #ddd;
        }

    </style>
</head>

<body>

    <div class="wrapper">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
        <br>
        <div class="merchant-text" style="text-align: center;">
            Masuk sebagai Merchant
        </div>
        <br>
        @if ($errors->any())
        <div class="alert alert-success" role="alert" style="background: #dc3545;">
            <span style="color: rgb(255,255,255);font-family: Poppins, sans-serif;">
                <strong>
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </strong>
            </span>
        </div>
        @endif
        <form class="p-3 mt-3" action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Kata Sandi">
            </div>
            <input style="color: #000000" type="submit" name="submit" class="btn mt-3" value="Masuk">
        </form>
        <br>
        <div class="text-center fs-6">
            Belum punya akun? <a href="{{ route('registermerchant') }}">Daftar sekarang</a>
        </div>
        <br>
        <div class="text-center mt-3">
            <a href="{{ route('start') }}" class="btn-back">&#8592; Kembali</a>
        </div>
    </div>

    <script src="{{ asset ('alertassets/bootstrap/js/alert.min.js') }}"></script>
    <script src="{{ asset('alertassets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>

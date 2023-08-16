<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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
</head>
<body>
    
</body>
</html>
<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
    </div>
    <form class="p-3 mt-3" action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <input type="submit" name="submit" class="btn mt-3" value="Masuk">
    </form>
    <br>
    <div class="text-center fs-6">
        Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a>
    </div>
</div>
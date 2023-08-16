<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>User Registration</title>
   <link rel="stylesheet" href="{{ asset('assets/css/regist.css') }}">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
   <div class="wrapper d-flex">
      <div class="title col-md-6 d-flex justify-content-center">
         <img src="{{ asset('assets/img/logo.png') }}" alt="logo" style="width:350px; height:350px;">
      </div>
      <div class="col-md-6 ">
         <form id="form_login" role="form" action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="d-flex">
               <div class="aa">
                  <div class="field">
                     <input type="text" name="nama" id="nama" required>
                     <label>Nama Lengkap</label>
                    </div>
                    <div class="field" placeholder="Sebagai">
                        <select id="role" name="role">
                           <option value="Customer">Customer</option>
                           <option value="Porter">Porter</option>
                           <option value="Porter">Merchant</option>
                        </select>
                     </div>
                  <div class="field" placeholder="Jenis Kelamin">
                     <select id="jk" name="jk">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                     </select>
                  </div>
               </div>
               <div class="bb">
                  <div class="field">
                     <input type="text" name="no_hp" id="no_hp" required>
                     <label>Nomor Handphone</label>
                  </div>
                  <div class="field">
                     <input type="text" name="username" id="username" required>
                     <label>Username</label>
                  </div>
                  <div class="field">
                     <input type="password" name="password" id="password" required>
                     <label>Kata Sandi</label>
                  </div>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="submit" class="input-submit" value="Daftar">
            </div>
            <div class="signup-link">
               Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
            </div>
         </form>
      </div>
   </div>
</body>

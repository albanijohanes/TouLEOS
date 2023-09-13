<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
        ADMIN-Merchant Aktif
    </title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('adminassets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('adminassets/fonts/fontawesome-all.min.css') }}">
</head>
@php
    $bgUrl = asset('adminassets/img/bg.png');
@endphp

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark"
            style="background: url('{{ $bgUrl }}') bottom;">
            <div class="container-fluid d-flex flex-column p-0">
                <img src="{{ asset('adminassets/img/Logo%20web%20Tou%20Leos%20(3).png') }}"
                    style="width: 70px;margin-right: 0px;">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                    </div>
                    <div class="sidebar-brand-text mx-3">
                        <span>
                            ADMIN
                        </span>
                    </div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar" style="margin-top: -32px;padding-top: 12px;">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('berandaAdmin') }}">
                            <i class="fas fa-user" style="font-size: 13px;">
                            </i>
                            <span style="color: rgba(233,234,238);font-size: 16px;">
                                Pengunjung Pasar
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-item dropdown show">
                            <a class="dropdown-toggle" aria-expanded="true" data-bs-toggle="dropdown" href="#"
                                style="color: rgb(233,234,238);margin-left: 10px;">
                                <i class="far fa-user-circle">
                                </i>
                                Porter
                            </a>
                            <div class="dropdown-menu show" data-bs-popper="none">
                                <a class="dropdown-item" href="{{ route('porter_permohonan') }}">
                                    Permohonan
                                    @if($countP > 0)
                                        <span class="badge badge-number" style="background-color: #964B00;">
                                            {{ $countP }}
                                        </span>
                                    @endif
                                </a>
                                <a class="dropdown-item" href="{{ route('porter_aktif') }}">
                                    Aktif
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown show">
                            <a class="dropdown-toggle" aria-expanded="true" data-bs-toggle="dropdown" href="#"
                                style="color: rgb(233,234,238);margin-left: 15px;">
                                <i class="far fa-star">
                                </i>
                                Merchant
                            </a>
                            <div class="dropdown-menu show" data-bs-popper="none">
                                <a class="dropdown-item" href="{{ route('merchant_permohonan') }}">
                                    Permohonan
                                    @if($countM > 0)
                                        <span class="badge badge-number" style="background-color: #964B00;">
                                            {{ $countM }}
                                        </span>
                                    @endif
                                </a>
                                <a class="dropdown-item" href="{{ route('merchant_aktif') }}">
                                    Aktif
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fas fa-user" style="font-size: 13px;">
                            </i>
                            <span style="color: rgba(233,234,238);font-size: 16px;">
                                Keluar
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive" style="padding-top: 18px;padding-left: 0px;margin-top: 40px;margin-left: 16px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="font-family: Poppins, sans-serif;font-size: 14px;">
                            No
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;padding-left: 60px;padding-right: 65px;font-size: 14px;">
                            Nama
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;font-size: 14px;padding-right: 50px;padding-left: 42px;">
                            Email
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;text-align: center;font-size: 14px;padding-right: 25px;padding-left: 22px;">
                            No Handphone
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;text-align: center;padding-left: 30px;padding-right: 26px;font-size: 14px;">
                            Jenis Kelamin
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;text-align: center;padding-left: 30px;padding-right: 26px;font-size: 14px;">
                            Alamat
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;text-align: center;padding-right: 32px;padding-left: 34px;font-size: 14px;">
                            KTP
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;text-align: center;padding-right: 32px;padding-left: 34px;font-size: 14px;">
                            SIUP
                        </th>
                        <th
                            style="font-family: Poppins, sans-serif;text-align: center;padding-right: 32px;padding-left: 34px;font-size: 14px;">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if($merchant->count() > 0)
                        @foreach($merchant as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->user->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->user->no_hp }}</td>
                                <td>{{ $row->user->jk }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td><a href="{{ route('viewImg', ['type' => 'ktp', 'filename' => $row->ktp]) }}"
                                        target="_blank">
                                        <button class="btn btn-success">VIEW</button>
                                    </a>
                                </td>
                                <td><a href="{{ route('viewImg', ['type' => 'siup', 'filename' => $row->siup]) }}"
                                        target="_blank">
                                        <button class="btn btn-success
@if($countM > 0)
                                        <span class=" badge badge-number" style="background-color: #964B00;">
                                            {{ $countM }}
                                            </span>
                        @endif">VIEW</button>
                        </a>
                        </td>
                        <td>{{ $row->status }}</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/merchant_ad.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TAMBAH-DAGANGAN</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset ('merchantassets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset ('merchantassets/css/Auto-Modal-Popup.css') }}">
</head>

<body>
    <div class="modal fade" role="dialog" tabindex="-1" id="contactModal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family: Poppins, sans-serif;">Tambah Promosi Dagangan</h4><button class="close" type="button" aria-label="Close" data-dismiss="modal" style="color: rgb(0,0,0);"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form data-bss-recipient="67b465af92ed4ffdcc0537eaadc6dd61">
                                <div class="form-group"><label style="font-family: Poppins, sans-serif;font-weight: bold;">Hari/Tanggal</label><input class="form-control" type="date" style="font-family: Poppins, sans-serif;"></div>
                                <div class="form-group"><label style="font-family: Poppins, sans-serif;font-weight: bold;">Nama Bahan/Barang</label><input class="form-control" type="text" style="font-family: Poppins, sans-serif;"></div>
                                <div class="form-group"><label style="font-family: Poppins, sans-serif;font-weight: bold;">Satuan</label><input class="form-control" type="text" style="font-family: Poppins, sans-serif;"></div>
                                <div class="form-group"><label style="font-family: Poppins, sans-serif;font-weight: bold;">Harga</label><input class="form-control" type="number" style="font-family: Poppins, sans-serif;"></div>
                                <div class="form-group"><label style="font-family: Poppins, sans-serif;font-weight: bold;">Deskripsi</label><textarea class="form-control" style="font-family: Poppins, sans-serif;"></textarea></div>
                                <div class="modal-footer"><button class="btn btn-dark" style="width: 100%;background: rgba(105,72,45,0.9);" type="submit">Tambah</button></div>
                            </form>
                        </div>
                        <div class="col-lg-6 hide-ele"><img style="width: 100%;margin-top: 38px;" src="assets/img/20230712_124645.jpg"><img style="width: 100%;margin-top: 50px;" src="assets/img/20230712_124645.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/Auto-Modal-Popup-modal.js"></script>
</body>

</html>
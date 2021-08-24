<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Registrasi</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css">
</head>
  
<body>
    <section class="container-fluid">
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" method="post" action="proses_register.php">
                <h2 class="text-center font-weight-bold"> Register </h2>

                <div class="form-group">
                    <input type="text" class="form-control" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                </div>
                <div class="form-group">
                <input type="text"  name="tanggal_lahir"  class="form-control datepicker"  required placeholder="Masukan Tanggal Lahir"/>
                </div>
                <script type="text/javascript">
                $(function(){
                $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                });
                });
                </script>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="telp" placeholder="Masukan Nomor Telp">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                </div>

                <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                <div class="form-footer mt-2">
                    <p> Sudah punya account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </section>
        </section>
    </section>
 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

</body>
</html>
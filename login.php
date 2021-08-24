<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
  
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    <section class="container-fluid">
      
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" method="post" action="proses_login.php">
                <h2 class="text-center font-weight-bold"> LOGIN </h2>

                <div class="form-group">
                    <input type="text" class="form-control" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                <div class="form-footer mt-2">
                    <p> Belum Punya Akun? <a href="register.php">Daftar Disini</a></p>
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
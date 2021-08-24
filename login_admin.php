<?php
session_start();
require_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Login Admin</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
  
<body>
    <section class="container-fluid">
     
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" method="post" action="check_login.php">
                <h2 class="text-center font-weight-bold"> LOGIN ADMIN </h2>

                <div class="form-group">
                    <input type="text" class="form-control"  name="id" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
            
            </form>
        </section>
        </section>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

</body>
</html>
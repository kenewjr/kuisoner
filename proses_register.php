<?php

include "koneksi.php";


$nim=$_POST["nim"];
$password = md5($_POST["password"]);
$nama=$_POST["nama"];
$tempat_lahir=$_POST["tempat_lahir"];
$tanggal_lahir=$_POST["tanggal_lahir"];
$telp=$_POST["telp"];
$email=$_POST["email"];

$query_sql = "insert into mahasiswa (nim,password,nama,tempat_lahir,tanggal_lahir,telp,email) values
		('$nim','$password','$nama','$tempat_lahir','$tanggal_lahir','$telp','$email')";
        
        if (mysqli_query($kon, $query_sql)) {
            header("Location: index.php");
        } 
else {
      echo "Pendaftaran Gagal : " . mysqli_error($kon);
}

?>


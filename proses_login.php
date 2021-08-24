<?php
session_start();

include "koneksi.php";

$nim = $_POST["nim"];
$password = md5($_POST["password"]);

$sql = "select * from mahasiswa where nim='".$nim."' and password='".$password."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["nim"]=$row["nim"];
		$_SESSION["nama"]=$row["nama"];

	

		header("Location:kuisioner.php");
		
	}else {
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}
?>
<?php
session_start();
include "koneksi.php";

$id = $_POST["id"];
$password = ($_POST["password"]);

$sql = "select * from admin where id='".$id."' and password='".$password."' ";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id"]=$row["id"];
		$_SESSION["password"]=$row["password"];
		header("Location:admin.php");
		
	}else {
		echo "Username atau password salah <br><a href='login_admin.php'>Kembali</a>";
	}
?>
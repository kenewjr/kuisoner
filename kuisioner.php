<?php
session_start();
if (!isset($_SESSION["nim"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
$nim=$_SESSION["nim"];
$nama=$_SESSION["nama"];
?>

<html>
<head>
 <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap-5.0.2/css/bootstrap.min.css" />
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Selamat Datang di Halaman User</h1>
  <h4>Halaman ini hanya dapat diakses setelah login</h4>
    <p>NIM : <?php echo $nim; ?></p>
    <p>Nama : <?php echo $nama; ?></p>

<h2 style="text-align: center;">Kepuasan Mahasiswa Terhadap Kampus</h2>
 <form action="proses_kuisioner.php" method="POST">
<table>
  <tr>
    <th>No</th>
    <th>Soal</th>
    <th>Sangat Baik</th>
    <th>Baik</th>
    <th>Kurang</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Pelayanan internet</td>
    <div class="btn-group" data-toggle="buttons">
<td><input type="radio" name="1"  value='2'></td>
<td><input type="radio" name="1"  value='1'></td>
<td><input type="radio" name="1"  value='0'></td>
</div>
  </tr>  
  <tr>
    <td>2.</td>
    <td>Pelayanan akademik</td>
<div class="btn-group" data-toggle="buttons">
<td><input type="radio" name="2"  value='2'></td>
<td><input type="radio" name="2"  value='1'></td>
<td><input type="radio" name="2"  value='0'></td>
</div>
  </tr>
  <tr>
    <td>3.</td>
    <td>Perpustakaan dan fasilitasnya</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="3"  value='2'></td>
<td><input type="radio" name="3"  value='1'></td>
<td><input type="radio" name="3"  value='0'></td>
</div>
  </tr>
  <tr>
    <td>4.</td>
    <td>Strukture materi perkuliahan</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="4"  value='2'></td>
<td><input type="radio" name="4"  value='1'></td>
<td><input type="radio" name="4"  value='0'></td>
</div>
  </tr>
  <tr>
    <td>5.</td>
    <td>Ketepatan waktu dalam mengampu kuliah</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="5"  value='2'></td>
<td><input type="radio" name="5"  value='1'></td>
<td><input type="radio" name="5"  value='0'></td>
</div>
  </tr>
  <tr>
    <td>6.</td>
    <td>Pelayanan kemahasiswaan</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="6" value='2'></td>
<td><input type="radio" name="6"  value='1'></td>
<td><input type="radio" name="6"  value='0'></td>
</div>
  </tr>
  <tr>
    <td>7.</td>
    <td>Pelayanan tata usaha</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="7" value='2'></td>
<td><input type="radio" name="7" value='1'></td>
<td><input type="radio" name="7" value='0'></td>
</div>
  </tr>
  <tr>
    <td>8.</td>
    <td>Program beasiswa</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="8" value='2'></td>
<td><input type="radio" name="8" value='1'></td>
<td><input type="radio" name="8" value='0'></td>
</div>
  </tr>
  <tr>
    <td>9.</td>
    <td>Program asuransi mahasiswa</td>
    <div class="btn-group" data-toggle="buttons">
    <td><input type="radio" name="9"  value='2'></td>
<td><input type="radio" name="9"  value='1'></td>
<td><input type="radio" name="9"  value='0'></td>
</div>
  </tr>
  <tr>
    <td>10.</td>
    <td>Dalam merespon keluhan mahasiswa</td>
   <div class="btn-group" data-toggle="buttons">
   <td><input type="radio" name="10"  value='2'></td>
<td><input type="radio" name="10"  value='1'></td>
<td><input type="radio" name="10"  value='0'></td>
</div>
</tr>
</table>
<INPUT TYPE="submit"name="submit" VALUE="Kirim">
<INPUT TYPE="reset" VALUE="Batal">
    <a href="logout.php" class="btn btn-warning" role="button">Logout</a>
</div>
</form>
</body>
</html> 
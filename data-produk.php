<?php
 header('Content-Type: application/json; charset=utf8');
  
 
 $server = "localhost";
  $user = "root";
 $pass = "";
 $dbname = "kuisioner";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);

 $sql="SELECT * FROM quisioner";
 $query=mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data; 

 //mengubah data array menjadi format json
 echo json_encode($array);
?>
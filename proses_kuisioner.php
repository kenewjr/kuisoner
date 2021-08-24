<?php
require_once "koneksi.php";
if(isset($_POST['submit']))
{
 foreach ($_POST as $param_name => $param_val) {
    $sql = "SELECT * FROM quisioner WHERE no='".$param_name."'";
    $query=mysqli_query($kon, $sql);
   while($masukin=mysqli_fetch_assoc($query)){
    $sumsgtbak=$masukin['sangat_baik'];
    $sumbak=$masukin['baik'];
    $sumkur=$masukin['kurang'];
    if($param_val==2){
        $sumsgtbak=$masukin['sangat_baik']+1;
    }if($param_val==1){
        $sumbak=$masukin['baik']+1;
    }if($param_val==0){
        $sumkur=$masukin['kurang']+1;
    }
    
        $query_update = "UPDATE quisioner SET kurang = '".$sumkur."', baik = '".$sumbak."', sangat_baik='".$sumsgtbak."' 
        WHERE no='".$param_name."' ";
        $queryup=mysqli_query($kon, $query_update);
        if (!$queryup){
        die("Koneksi gagal:".mysqli_connect_error());
     }  
    }
  }
  session_destroy();
  header("Location:index.php?msg=Berhasil DiKirim");
}
?>
<?php
session_start();

$_SESSION['nim']='';
$_SESSION['nama']='';
$_SESSION["id"]='';
$_SESSION["password"]='';

unset($_SESSION['nim']);
unset($_SESSION['nama']);
unset($_SESSION['id']);
unset($_SESSION['password']);


session_unset();
session_destroy();
header('Location:index.php?msg=Successfully Logged out');

?>
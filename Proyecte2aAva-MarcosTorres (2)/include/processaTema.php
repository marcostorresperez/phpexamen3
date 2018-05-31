<?php 
session_start();
$tema = isset($_GET['tema'])?$_GET['tema']:"blau";
$_SESSION['tema']=$tema;
header("Location: ../index.php");
die();
?>



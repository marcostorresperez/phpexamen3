<?php
session_start();

$seccio = isset($_GET['seccio'])?$_GET['seccio']:"inici";
$_SESSION['seccio'] = $seccio;
header("Location: ../index.php");
die();
?>
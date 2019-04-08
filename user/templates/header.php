<?php
session_start();
include '../config/koneksi.php';
  if(isset($_SESSION['user'])){
    $session = $_SESSION['user'];
    $query   = mysqli_query($connect, "SELECT * FROM user WHERE id ='$session'") or die (mysql_error());
    $data    = mysqli_fetch_array($query);
  }
  
  else{
    header("location:../");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PT. Arwana Citramulia Tbk</title>
  <link rel="shortcut icon" href="../assets/img/arna-logo.png">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../assets/dist/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/dist/pricing.css">
  <link rel="stylesheet" href="../assets/dist/style.css">
  <!-- <link rel="stylesheet" href="../assets/dist/sigin.css"> -->

  <!-- <link rel="stylesheet" href="pricing.css"> -->
  <!-- <link rel="stylesheet" href="sigin.css"> -->
  
<!-- icheck -->
<link href="../assets/dist/icheck/skins/all.css?v=1.0.2" rel="stylesheet">

<!-- FontAwesome-->
<link rel="stylesheet" href="../assets/dist/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- back to top css -->
<style>
	.back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
}
</style>

</head>
<body>
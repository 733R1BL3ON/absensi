<?php
session_start();
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {
 
	header('location:../process-login/login.php');
	exit();
}
?>

<html>
<head>
 <title>Multi Insert</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="../about.php">PROGRAM ABSENSI</a>
	</div>
	<ul class="nav navbar-nav">
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="absen.html">Absen</a></li>
	</ul>
<ul class="nav navbar-nav navbar-right">
		<li><a href="#" onClick="history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left"></span> Kembali</a></li>
		<li><a href="../logout/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	</ul>
   </div>
</nav>
<h2>Hallo <?=$_SESSION['nama'];?> Apakabar ?</h2>
</body>
</html>
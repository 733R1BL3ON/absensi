<?php
	session_start();
		if ( !isset($_SESSION['user_login']) || 
		   ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {
			header('location:../process-login/login.php');
	exit();
}
?>
	<html>
	<head>
		<title>Home</title>
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
					<li><a href="admindata/admindata.php">Data Admin</a></li>
					<li><a href="memberdata/memberdata.php">Data Member</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Siswa
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="siswadata/Rpl 1/index.php">RPL 1</a></li>
						  <li><a href="siswadata/Rpl 2/index.php">RPL 2</a></li>
						  <li><a href="siswadata/Rpl 3/index.php">RPL 3</a></li>
						  <li><a href="siswadata/Multimedia 1/index.php">MULTIMEDIA 1</a></li>
						  <li><a href="siswadata/Multimedia 2/index.php">MULTIMEDIA 2</a></li>
						  <li><a href="siswadata/Multimedia 3/index.php">MULTIMEDIA 3</a></li>
						  <li><a href="siswadata/Tkj/index.php">TKJ</a></li>
						  <li><a href="siswadata/Akutansi 1/index.php">AKUTANSI 1</a></li>
						  <li><a href="siswadata/Akutansi 2/index.php">AKUTANSI 2</a></li>
						  <li><a href="siswadata/Akutansi 3/index.php">AKUTANSI 3</a></li>
						  <li><a href="siswadata/Adm Perkantoran 1/index.php">ADM PERKANTORAN 1</a></li>
						  <li><a href="siswadata/Adm Perkantoran 2/index.php">ADM PERKANTORAN 2</a></li>
						  <li><a href="siswadata/Adm Perkantoran 3/index.php">ADM PERKANTORAN 3</a></li>
						  <li><a href="siswadata/Pemasaran 1/index.php">PEMASARAN 1</a></li>
						  <li><a href="siswadata/Pemasaran 2/index.php">PEMASARAN 2</a></li>
						  <li><a href="siswadata/pemasaran 3/index.php">PEMASARAN 3</a></li>
						</ul>
					</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onClick="history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left"></span> Kembali</a></li>
						<li><a href="../logout/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
			</div>
		</nav>
				<h2>Halo <?=$_SESSION['nama'];?> Selamat Datang</h2>
	</body>
	</html>
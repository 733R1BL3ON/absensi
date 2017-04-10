<?php
	include "../../config/config.php";
	$id = $_GET['id'];
	
		if(isset($_POST['submit'])){
		
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
	$level = @$_POST['level'];

    $query = $dbconnect->query("UPDATE users SET nama='$nama',username='$username',password='$password',level_user='$level' WHERE id_user='$id'");

		if($query){
			echo "<script language='javascript'>alert('Data Berhasil Diubah')</script>";
		}else{
			echo "<script language='javascript'>alert('Data Gagal Diubah')</script>";
		}
	}

		$query = $dbconnect->query("SELECT * FROM users WHERE id_user='$id'");
		$data = $query->fetch_array();

?>
<html>
	<head>
		<title>Silahkan Daftar</title>
		<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../../bootstrap/css/style.css">
		<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="../../bootstrap/js/jquery.js"></script>
	</head>
	
	<body>
<nav class="navbar navbar-default">
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../../about.php">PROGRAM ABSENSI</a>
			</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="../index.php">Home</a></li>
					<li><a href="../admindata/admindata.php">Data Admin</a></li>
					<li><a href="memberdata.php">Data Member</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Siswa
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="../siswadata/Rpl 1/index.php">RPL 1</a></li>
						  <li><a href="../siswadata/Rpl 2/index.php">RPL 2</a></li>
						  <li><a href="../siswadata/Rpl 3/index.php">RPL 3</a></li>
						  <li><a href="../siswadata/Multimedia 1/index.php">MULTIMEDIA 1</a></li>
						  <li><a href="../siswadata/Multimedia 2/index.php">MULTIMEDIA 2</a></li>
						  <li><a href="../siswadata/Multimedia 3/index.php">MULTIMEDIA 3</a></li>
						  <li><a href="../siswadata/Tkj/index.php">TKJ</a></li>
						  <li><a href="../siswadata/Akutansi 1/index.php">AKUTANSI 1</a></li>
						  <li><a href="../siswadata/Akutansi 2/index.php">AKUTANSI 2</a></li>
						  <li><a href="../siswadata/Akutansi 3/index.php">AKUTANSI 3</a></li>
						  <li><a href="../siswadata/Adm Perkantoran 1/index.php">ADM PERKANTORAN 1</a></li>
						  <li><a href="../siswadata/Adm Perkantoran 2/index.php">ADM PERKANTORAN 2</a></li>
						  <li><a href="../siswadata/Adm Perkantoran 3/index.php">ADM PERKANTORAN 3</a></li>
						  <li><a href="../siswadata/Pemasaran 1/index.php">PEMASARAN 1</a></li>
						  <li><a href="../siswadata/Pemasaran 2/index.php">PEMASARAN 2</a></li>
						  <li><a href="../siswadata/Pemasaran 3/index.php">PEMASARAN 3</a></li>
						</ul>
					</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onClick="history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left"></span> Kembali</a></li>
						<li><a href="../../logout/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
			</div>
		</nav>
<h1 align="center">SILAHKAN UBAH</h1>
<div class="col-sm-3">
<div class="table">
					<form id="login-form" method="post" role="form" style="display: block;">
			<div class="form-group">
			Nama <input type="text" name="nama" id="nama" tabindex="1" class="form-control" value="<?php echo $data['nama']?>">
			</div>
			<div class="form-group">
			Username <input type="text" name="username" id="username" tabindex="2" class="form-control" value="<?php echo $data['username']?>">
			</div>
			<div class="form-group">
			Password <input type="text" name="password" id="password" tabindex="3" class="form-control" value="<?php echo $data['password']?>">
			</div>
			<div class="form-group">
			Level <input type="text" name="level" id="level" tabindex="4" class="form-control" value="<?php echo $data['level_user']?>">
			</div>
			<div class="row">
				<div class="col-sm-6">
			<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
				</div>
			</div>
		</div>
		</div>
	</form>
</body>	
</html>
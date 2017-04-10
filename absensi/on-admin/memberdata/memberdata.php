<html>
<head>
	<title>Data User</title>
		<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="../../bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
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
				<li><a href="../../logout/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
		</div>
	</nav>

<?php
	include "../../config/config.php";
	$cari = null;
	if(isset($_POST["search"]))
	{
		$cari = $_POST["search"];
	}
	$query = $dbconnect->query("SELECT * FROM users WHERE level_user ='member' and nama LIKE '%".$cari."%' ");
?>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
	<div class="col-sm-2">
		<input type="text" name="search" class="form-control" placeholder="Silahkan Cari">
	</div>
		<input type="submit" name="cari" value="Cari" class="btn btn-info">
</form>

	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Aksi</th>				
			</tr>
		</thead>
		 <?php
			while($data = $query->fetch_array()) {
		 ?>
		<tbody>
			<tr>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['password']; ?></td>
				<td><?php echo $data['level_user'];?></td>
				<td><a class ="btn btn-warning btn sm" href="update.php?id=<?php echo $data['id_user']?>">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
					<a class="btn btn-danger btn sm" href="delete.php?id=<?php echo $data['id_user']?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		</tbody>
<?php
	}
?>
	</table>
</body>
</html>
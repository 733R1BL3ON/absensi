<html>
<head>
	<title>RPL 2</title>
		<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="../../../bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="../../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="../../../about.php">PROGRAM ABSENSI</a>
		</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="../../index.php">Home</a></li>
					<li><a href="../../admindata/admindata.php">Data Admin</a></li>
					<li><a href="../../memberdata/memberdata.php">Data Member</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Siswa
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="../Rpl 1/index.php">RPL 1</a></li>
						  <li><a href="index.php">RPL 2</a></li>
						  <li><a href="../Rpl 3/index.php">RPL 3</a></li>
						  <li><a href="../Multimedia 2/index.php">MULTIMEDIA 1</a></li>
						  <li><a href="../Multimedia 3/index.php">MULTIMEDIA 2</a></li>
						  <li><a href="../Multimedia 3/index.php">MULTIMEDIA 3</a></li>
						  <li><a href="../Tkj/index.php">TKJ</a></li>
						  <li><a href="../Akutansi 1/index.php">AKUTANSI 1</a></li>
						  <li><a href="../Akutansi 2/index.php">AKUTANSI 2</a></li>
						  <li><a href="../Akutansi 3/index.php">AKUTANSI 3</a></li>
						  <li><a href="../Adm Perkantoran 1/index.php">ADM PERKANTORAN 1</a></li>
						  <li><a href="../Adm Perkantoran 2/index.php">ADM PERKANTORAN 2</a></li>
						  <li><a href="../Adm Perkantoran 3/index.php">ADM PERKANTORAN 3</a></li>
						  <li><a href="../Pemasaran 1/index.php">PEMASARAN 1</a></li>
						  <li><a href="../Pemasaran 2/index.php">PEMASARAN 2</a></li>
						  <li><a href="../Pemasaran 3/index.php">PEMASARAN 3</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#" onClick="history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left"></span> Kembali</a></li>
				<li><a href="../../../logout/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
		</div>
	</nav>

<?php
	include "../../../config/config.php";
	$cari = null;
	if(isset($_POST["search"]))
	{
	$cari = $_POST["search"];
	}
	$query = $dbconnect->query("SELECT * FROM siswa WHERE jurusan ='Rpl2' and kelas='XI' and nama LIKE '%".$cari."%' ");
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
				<th>Jenis Kelamin</th>
				<th>Kelas</th>
				<th>Jurusan</th>
				<th>Keterangan</th>
				<th>Tanggal dan Waktu</th>
				<th>Seksi Absensi</th>
				<th>Opsi</th>
			</tr>
		</thead>
				<?php
					while($data = $query->fetch_array()){
				?>
		<tbody>
			<tr>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['kelas']; ?></td>
				<td><?php echo $data['jurusan']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				<td><?php echo $data['Tanggal']; ?></td>
				<td><?php echo $data['user']; ?></td>
				<td><a class="btn btn-danger btn-sm" href="deletexi.php?id=<?php echo $data['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">
					<span class="glyphicon glyphicon-trash"></span>
				</td>
			</tr>
		</tbody>
<?php
	}
?>
	
	</table>
</body>
</html>
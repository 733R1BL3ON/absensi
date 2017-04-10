<html>
<head>
 <title>Multi Insert</title>
 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
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
 
 <form role="form" class="form-inline" method="post" action="check-insert.php">  
  <?php
   for($i=0;$i<$_POST['angka'];$i++){
  ?>
    <div class="form-group">
		<div class="col-sm-2">
        <input type="text" id="username"  class="form-control" placeholder="Masukkan Nama" name="nama<?php echo $i?>"required>
		</div>
    </div>
		<div class="form-group">
        <div>
        <div class="radio-inline"> <input type="radio" id="opsi1" value="X"  name="kelas<?php echo $i?>" required>X </div>
		<div class="radio-inline"> <input type="radio" id="opsi2" value="XI"  name="kelas<?php echo $i?>" required>XI </div>
		<div class="radio-inline"> <input type="radio" id="opsi3" value="XII"  name="kelas<?php echo $i?>" required>XII </div>
        </div>
	</div>
	<div class="form-group">
	<div class="col-sm-2">
        <select id="single_select" class="form-control" name="jenkel<?php echo $i ?>">
           <option value="pilih" selected>Pilih Jenis Kelamin</option><br>
			<option value="Laki-Laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>
        </select>
		</div>
    </div>
	<div class="form-group">
	<div class="col-sm-2">
        <select id="single_select" class="form-control" name="jurusan<?php echo $i?>">
            <option value="pilih">Pilih Jurusan</option>
			<option value="Rpl1">RPL1</option>
			<option value="Rpl2">RPL2</option>
			<option value="Rpl3">RPL3</option>
			<option value="Multimedia1">MULTIMEDIA 1</option>
			<option value="Multimedia2">MULTIMEDIA 2</option>
			<option value="Multimedia3">MULTIMEDIA 3</option>
			<option value="Tkj">TKJ</option>
			<option value="Akuntansi1">AKUTANSI 1</option>
			<option value="Akuntansi2">AKUTANSI 2</option>
			<option value="Akuntansi3">AKUTANSI 3</option>
			<option value="Adm Perkantoran1">ADM PERKANTORAN 1</option>
			<option value="Adm Perkantoran2">ADM PERKANTORAN 2</option>
			<option value="Adm Perkantoran3">ADM PERKANTORAN 3</option>
			<option value="Pemasaran1">PEMASARAN 1</option>
			<option value="Pemasaran2">PEMASARAN 2</option>
			<option value="Pemasaran3">PEMASARAN 3</option>
        </select>
		</div>
    </div>
	<div class="form-group">
        <div>
        <div class="radio-inline"> <input type="radio" id="opsi1" value="Sakit"  name="ket<?php echo $i?>" required>Sakit</div>
		<div class="radio-inline"> <input type="radio" id="opsi2" value="Izin"  name="ket<?php echo $i?>" required>Izin</div>
		<div class="radio-inline"> <input type="radio" id="opsi3" value="Alpa"  name="ket<?php echo $i?>" required>Alpa</div>
        </div>
	</div>
	<br>
	<br>
  <?php
   }
  ?>
  <input type="hidden" name="jumlah" value="<?php echo $_POST['angka']?>"/>
  <button type="submit" class="btn btn-primary" value="post" name="simpan">Simpan</button>
 </form>
</body>
</html>
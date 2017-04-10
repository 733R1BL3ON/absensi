<html>
<head>
<title>SILAHKAN REGISTER</title>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script  type="text/javascript" src="../bootstrap/js/jquery.js"></script>
</head>
<body>
<div class="head">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../about.php">PROGRAM ABSENSI</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onClick="history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left"></span> Kembali</a></li>
			</ul>
			</div>
		</nav>
	</div>
		<div class="header-register">
		<h2>SILAHKAN REGISTER</h2>
		</div>
		<div class="body-register">
			<div class="col-lg-12">
			<form id="login-form" action="check-register.php" method="post" role="form" style="display: block;">
				<div class="form-group">
					<input type="text" name="nama" id="name" class="form-control" placeholder="Nama" value="" required>
				</div>
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
				</div>
					<input type="radio" id="opsi1" value="member"  name="level" checked> Member</input>
				<div class="form-group">
					<div class="col-sm-6 col-sm-offset-5">
						<input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
					</div>
				</div>
			</form>
			</div>
		</div>
</body>
</html>
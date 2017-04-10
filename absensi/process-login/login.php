<html>
<head>
<title>SILAHKAN LOGIN</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../bootstrap/css/style.css">
<script type="text/javascript" src="../bootstrap/js/bootstrap.css"></script>
<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
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
	
	<div class="header-login">
		<h2>SILAHKAN LOGIN</h2>
	</div>
	<div class="body-login">
		<div class="col-lg-12">
			<form id="login-form" action="check-login.php" method="post" role="form">
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control" placeholder="username" value="" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="password" required>
				</div>
				<div class="col-sm-6 col-sm-offset-5">
					<input class="btn btn-primary" type="submit" name="simpan" value="Login">
				</div>
		</div>
	</div>
</body>
</html>
<?php
include('config/config.php');
if(isset($_POST['simpan'])){
	$nama	= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level	= $_POST['level'];
	
	$sql	= 'insert into users (nama,username,password,level_user) values ("'.$nama.'","'.$username.'","'.$password.'","'.$level.'")';
	$query	= mysqli_query($dbconnect,$sql);
	
	if($query){
		header('location: process-login/login.php');
	}
	else{
		echo 'Gagal';
	}
}
?>
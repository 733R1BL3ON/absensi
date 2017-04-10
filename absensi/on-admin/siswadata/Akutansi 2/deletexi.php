<?php
	include "../../../config/config.php";
	$id = $_GET['id'];
	$query = $dbconnect->query("DELETE FROM siswa WHERE id='$id'");
		if($query){
					header("location:ak2xi.php");
		}else{
				echo "Data Gagal Dihapus. <a href='ak2xi.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
<?php
	include "../../../config/config.php";
	$id = $_GET['id'];
	$query = $dbconnect->query("DELETE FROM siswa WHERE id='$id'");
		if($query){
					header("location:ap3xi.php");
		}else{
				echo "Data Gagal Dihapus. <a href='ap3xi.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
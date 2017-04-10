<?php
	include "../../../config/config.php";
	$id = $_GET['id'];
	$query = $dbconnect->query("DELETE FROM siswa WHERE id='$id'");
		if($query){
					header("location:mm3xi.php");
		}else{
				echo "Data Gagal Dihapus. <a href='mm3xi.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
<?php
	include "../../../config/config.php";
	$id = $_GET['id'];
	$query = $dbconnect->query("DELETE FROM siswa WHERE id='$id'");
		if($query){
					header("location:pm2xii.php");
		}else{
				echo "Data Gagal Dihapus. <a href='pm2xii.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
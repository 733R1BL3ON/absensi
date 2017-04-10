<?php
	include "../../config/config.php";
	$id = $_GET['id'];
	$query = $dbconnect->query("DELETE FROM users WHERE id_user='$id'");
		if($query){
					header("location:admindata.php");
		}else{
				echo "Data Gagal Dihapus. <a href='admindata.php'>Kembali ke halaman sebelumnya</a>";
		}
?>
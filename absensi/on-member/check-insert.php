<?php date_default_timezone_set("Asia/Jakarta");
session_start();
	if(!isset($_SESSION['user_login'])){
		}
include "../config/config.php";

for($i=0;$i<$_POST['jumlah'];$i++){
 $nama			= $_POST['nama'.$i];
 $jenkel		= $_POST['jenkel'.$i];
 $kelas			= $_POST['kelas'.$i];
 $jurusan		= $_POST['jurusan'.$i];
 $ket			= $_POST['ket'.$i];
 $tgl 			= date("Y-m-d H:i:s");
 $km 			= $_SESSION['nama'];
 $query = "insert into siswa(nama,jenis_kelamin,kelas,jurusan,keterangan,Tanggal,user)values('$nama','$jenkel','$kelas','$jurusan','$ket','$tgl','$km')";
 $dbconnect->query($query);
 if($query){
	echo"
		<script>alert('Absen Terkirim'); top.location='absen.html';</script>";
	}else{
		echo"<script>alert('Absen Gagal Terkirim')</script>";
	}
}
$dbconnect->close();
?>
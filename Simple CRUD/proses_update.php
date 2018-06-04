<?php
include ('koneksi.php');
	if( !empty($_POST['simpan'])){
		
		$kd_karyawan = $_POST['kd_karyawan'];
        $nm_karyawan = $_POST['nm_karyawan'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $umur = $_POST['umur'];
        $telp = $_POST['telp'];

		$sql = mysql_query("UPDATE registrasi set kd_karyawan='$kd_karyawan' nm_karyawan='$nm_karyawan' , alamat='$alamat' , jk='$jk' , umur='$umur' , telp='$telp' WHERE no= ?");
		if ($sql) {
			echo ' Data berhasil di UPDATE! ';
			header("Location: index.php");
		}else{
			echo ' Terjadi Error ';
		}
	}
?>
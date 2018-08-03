<?php

include("koneksi.php");

$id_karyawan = $_GET['id_karyawan'] ;

$sql = "DELETE FROM `karyawan` WHERE`id_karyawan`='{$id_karyawan}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

//var_dump($hasil);
if($ekseskusi_id){
	echo "Data berhasil Di Hapus";
	header("Location: read_data.php") ;
}else{
	echo "Data Gagal Di Hapus : ". $sql . "<br>" . mysqli_error($koneksi);
}
?>
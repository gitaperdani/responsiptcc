<?php

include("koneksi.php");

$id_barang = $_GET['id_barang'] ;

$sql = "DELETE FROM `barang` WHERE`id_barang`='{$id_barang}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

//var_dump($hasil);
if($ekseskusi_id){
	echo "Data berhasil Di Hapus";
	header("Location: read_data.php") ;
}else{
	echo "Data Gagal Di Hapus : ". $sql . "<br>" . mysqli_error($koneksi);
}
?>
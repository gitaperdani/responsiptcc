<?php

include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];

$sql = "INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`) VALUES ('{$id}','{$nama}','{$stok}')" ;

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil disimpan";
}else{
	echo "Data Gagal Disimpan : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>
<?php

include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];

$sql = "UPDATE `barang` SET `nama_barang`='{$nama}',`stok`='{$stok}' WHERE `id_barang`='{$id}'" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil Diubah";
}else{
	echo "Data Gagal Diubah: ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>
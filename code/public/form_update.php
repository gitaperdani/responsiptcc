<?php

include("koneksi.php");

$id_barang = $_GET['id_barang'] ;

$sql = "SELECT * FROM `barang` WHERE `id_barang`='{$id_barang}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

$hasil = mysqli_fetch_assoc($ekseskusi_id);
//var_dump($hasil);
include("menu.php") ;
?>
<h1>Ubah Data Barang</h1>

<div class="table-responsive">  
<table class="table">
<form action="update_proses.php" method="post">
	<tr>
		<td>Id Barang</td>
		<td><input type="text" name="id" value="<?php echo $hasil['id_barang'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" value="<?php echo $hasil['nama_barang'] ?>" /></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" name="stok" value="<?php echo $hasil['stok'] ?>"/></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="submit" value="Simpan"/>
			<input type="reset" value="Batal"/>
		</td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>
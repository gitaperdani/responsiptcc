<?php

	include("menu.php") ;
?>
<h1>Silahkan Masukkan Barang</h1>

<div class="table-responsive">  
<table class="table">
<form action="input_proses.php" method="post">
	<tr>
		<td>Id Barang</td>
		<td><input type="text" name="id" /></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" name="stok" /></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;"><input type="submit" value="Simpan"/><input type="reset" value="Batal"/></td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>

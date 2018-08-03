<?php

include("koneksi.php");

$sql = "SELECT * FROM `barang` WHERE 1" ;

$eksekusi = mysqli_query($koneksi, $sql);

//echo "$eksekusi";


// var_dump($row);
include("menu.php") ;
?>

<h1>Data Barang</h1>
<a href="form_input.php"> Input Daftar Barang </a>
<div class="table-responsive">  
<table class="table">
    <thead>
	<tr>
		<th>No</th>
		<th>Id Barang</th>
		<th>Nama Barang</th>
		<th>Stok </th>
		<th>Aksi</th>
	</tr>
	</thead>
	</tbody>
	<tr>	
		<?php
		$no = 1;
			foreach ($eksekusi as $row) {
		?>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['id_barang'] ?></td>
		<td><?php echo $row['nama_barang'] ?></td>
		<td><?php echo $row['stok'] ?></td>
		<td>
				<a href="form_update.php?id_barang=<?php echo $row['id_barang'] ?>"> Update </a> |
				<a href="hapus.php?id_barang=<?php echo $row['id_barang'] ?>"> Delete </a> 
		</td>
	</tr>
	<?php
		$no++;
	}
	?>	
</tbody>	
</table>
</div>
<?php
include("menubawah.php") ;
?>
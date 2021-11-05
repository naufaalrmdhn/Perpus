<?php 
	$id_buku = $_GET['idbuku'];

	$query = "SELECT * FROM tbbuku WHERE idbuku = '$id_buku'";
	$hasil = mysqli_query($db, $query);
	$row = mysqli_fetch_array($hasil);

	
?>

<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
				<td class="isian-formulir"><input type="text" name="idbuku" value="<?php echo $row['idbuku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled">
				</td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
				<td class="isian-formulir"><input type="text" name="judulbuku" value="<?php echo $row['judulbuku']; ?>" class="isian-formulir isian-formulir-border">
				</td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
				<td class="isian-formulir"><input type="text" name="kategori" value="<?php echo $row['kategori']; ?>" class="isian-formulir isian-formulir-border">
				</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>			
				<td class="isian-formulir"><input type="text" name="pengarang" value="<?= $row['pengarang']; ?>" class="isian-formulir isian-formulir-border">
				</td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>			
				<td class="isian-formulir"><input type="text" name="penerbit" value="<?= $row['penerbit']; ?>" class="isian-formulir isian-formulir-border">
				</td>
		</tr>

		<tr>
			<td class="label-formulir">Status</td>			
				<td class="isian-formulir"><input type="text" name="status" value="<?= $row['status']; ?>" class="isian-formulir isian-formulir-border">
				</td>
		</tr>

		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>
<?php
	include "../koneksi.php";
	$id_buku=$_GET['idbuku'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
		$foto = "admin-no-photo.jpg";
	else
		$foto = $r_tampil_anggota['foto'];
?>
<div id="label-page"><h3>Kartu Buku</h3></div>
<div id="content">
	<table id="tabel-input">
		
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['judulbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['pengarang']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['penerbit']; ?></td>
		</tr>
	</table>
</div>
<script>
		window.print();
</script>
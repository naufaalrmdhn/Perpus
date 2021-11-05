<?php 

require "../koneksi.php";

$id_buku = $_POST['idbuku'];
$judulbuku = $_POST['judulbuku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$status = $_POST['status'];

if (isset($_POST["simpan"])) {
		
	$sql = mysqli_query($db,"UPDATE tbbuku SET 
		idbuku = '$id_buku',
		judulbuku = '$judulbuku',
		kategori = '$kategori',
		pengarang = '$pengarang',
		penerbit = '$penerbit',
		status = '$status'
		 WHERE idbuku = '$id_buku'");

	if ($sql) {
		echo "<script>
			alert('berhasil ubah data buku');
			document.location.href='../index.php?p=buku';
			</script>";
	}else {
		echo "gagal";
	}	

}

?>
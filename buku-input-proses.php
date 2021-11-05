<?php 
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	require "../koneksi.php";
	$id_buku = $_POST['idbuku'];
	$judul_buku = $_POST['judulbuku'];
	$kategori = $_POST['kategori'];
	$pengarang= $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$status = $_POST['status'];

	if(isset($_POST['simpan'])){
	
	$sql = 
	"INSERT INTO tbbuku
		VALUES('$id_buku','$judul_buku','$kategori','$pengarang','$penerbit','$status')";
	$query = mysqli_query($db, $sql);
	if ($sql) {
		echo "<script>
				alert('berhasil tambah');
				document.location.href='../index.php?p=buku';
			</script>";
	}else {
		echo "gagal";
	}
	
}
?>
?>
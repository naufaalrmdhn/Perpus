<?php 
	
	require "../koneksi.php";

	$id = $_GET['idbuku'];

	mysqli_query($db,
	"DELETE FROM tbbuku
	WHERE idbuku='$id'"
	);

	header("location:../index.php?p=buku");

?>
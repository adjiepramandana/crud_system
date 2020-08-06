<?php
//Include file koneksi ke database
include "koneksi.php";

	if (isset($_POST['submit'])) {
  	$nama = trim($_POST['username']);
  	$produk = trim($_POST['password']);
  }

//Query input menginput data kedalam tabel anggota
  $sql = "insert into data (nama,produk) values
		('$nama','$produk')";

//Mengeksekusi/menjalankan query diatas	
  $hasil = mysqli_query($koneksi, $sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil == TRUE) {
	include "alert.php";
	exit;
  }else {
	echo "<script type='text/javascript'>alert('Data Gagal Ditambahkan');</script')";
	exit;
}  

	?>
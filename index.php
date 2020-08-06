<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>


	<style>
		.h1{
			font-family: PT SANS;
		}
	</style>
</head>
<body>
 
	<center><strong><h1>CRUD Data Barang</h1></strong></center>
	<br/>
	<a class="btn btn-primary btn-lg btn-block" href="tambah.php">+ Tambah Barang</a>
	<br/>
	<br/>
	<table class="table table-hover" border="1">
		<thead class="table-dark">
		    <tr>
		      <th scope="col">NO.</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Produk</th>
		      <th scope="col">Aksi</th>
		    </tr>
 		 </thead>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM data");
		while($hasil = mysqli_fetch_array($data)){
			?>
			<tbody>
				 <tr>
				      <th scope="row"><?php echo $no++; ?></th>
				      <td><?php echo $hasil['nama']; ?></td>
				      <td><?php echo $hasil['produk']; ?></td>
				      <td>
				      	<a href="edit.php?id=<?php echo $hasil['id']; ?>">EDIT</a>
					<a onclick="confirm('Yakin Untuk Menghapus?');" href="hapus.php?id=<?php echo $hasil['id']; ?>">HAPUS</a>
				      </td>
				 </tr>
			</tbody>
			<?php 
		}
		?>
	</table>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
<h2>Data Barang</h2>
<table class="table table-bordered">
	<caption>List Barang : </caption>
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Deskripsi Barang</th>
			<th>Foto Barang</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$nomor=1 ;
	 	$ambil=$koneksi->query("SELECT * FROM barang"); 
	 	while ($pecah = $ambil->fetch_assoc()) {	
	 ?>

		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_barang']; ?></td>
			<td><?php echo $pecah['deskripsi_barang']; ?></td>
			<td><?php echo $pecah['foto_barang']; ?></td>
			<td>
				<a href="" class="btn btn-danger"> Hapus</a>
				<a href="" class="btn btn-warning"> Ubah </a>
			</td>
		</tr>

	<?php 
	$nomor++;
	} ?>
	</tbody>
</table>
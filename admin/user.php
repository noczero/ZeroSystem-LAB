<h2>Data User</h2>

<table class="table table-bordered">
	<caption>List User</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	$nomor=1;
	$ambil = $koneksi->query("SELECT * FROM user");

	while ($pecah = $ambil->fetch_assoc()) {
	 ?>

		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_user']; ?></td>
			<td><?php echo $pecah['email_user']; ?></td>
			<td><?php echo $pecah['jurusan']; ?></td>
			<td>
				<a href="" class="btn btn-danger">Hapus</a>
				<a href="" class="btn btn-warning">Ubah</a>
			</td>

		</tr>
	
	<?php 
	$nomor++;
	} ?>
	</tbody>
</table>
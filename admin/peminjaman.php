<h2>Data Peminjaman</h2>

<table class="table table-bordered">
	<caption>List Peminjaman : </caption>
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama Peminjam</th>
			<th>Nama Barang</th>
			<th>Tanggal Pinjam </th>
			<th>Tanggal Kembali </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$nomor = 1;
		$ambil = $koneksi->query("SELECT * FROM peminjaman JOIN user ON peminjaman.id_user = user.id_user JOIN peminjaman_barang ON peminjaman.id_peminjaman = peminjaman_barang.id_peminjaman JOIN barang ON peminjaman_barang.id_barang = barang.id_barang" );
		while ($pecah = $ambil->fetch_assoc()) {
	 ?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $pecah['nama_user'] ?></td>
			<td><?php echo $pecah['nama_barang'] ?></td>
			<td><?php echo $pecah['tanggal_peminjaman'] ?></td>
			<td><?php echo $pecah['tanggal_kembali'] ?></td>
			<td> 
			<a href="" class="btn btn-info"> Detail</a>
			</td>
		</tr>

	<?php 
	$nomor++;
	} ?>
	</tbody>
</table>
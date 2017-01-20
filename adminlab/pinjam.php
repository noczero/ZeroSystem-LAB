<div class="card">
        <div class="header">
            <h2>DATA PEMINJAMAN</h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="body">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peminjam</th>
                                        <th>Nama Barang </th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                    <?php 
                                        $number = 1;
                                       // $ambil = $koneksi->query("SELECT * FROM peminjaman JOIN asisten ON peminjaman.id_asisten = asisten.id_asisten JOIN detil_pinjam ON detil_pinjam.id_pinjam = peminjaman.id_pinjam JOIN barang ON barang.id_barang = peminjaman.id_barang");

                                        $ambil = $koneksi->query("SELECT * FROM peminjaman JOIN asisten ON peminjaman.id_asisten = asisten.id_asisten JOIN detil_pinjam ON peminjaman.id_pinjam = detil_pinjam.id_pinjam JOIN barang ON detil_pinjam.id_barang = barang.id_barang ORDER by peminjaman.tgl_pinjam");

                                        while ($pecah = $ambil->fetch_assoc()) {
                                       
                                     ?>
                                        
                                    <tr>
                                        <td><?php echo $number ?></td>
                                        <td> <?php echo $pecah['nama_asisten']; ?></td>
                                        <td><?php echo $pecah['nama_barang']; ?></td>
                                        <td><?php echo $pecah['tgl_pinjam']; ?></td>
                                        <td><?php echo $pecah['tgl_kembali']; ?></td>
                                    </tr>


                                    <?php 
                                    $number++;
                                    }
                                     ?>
                                </tbody>

        </div>
</div>


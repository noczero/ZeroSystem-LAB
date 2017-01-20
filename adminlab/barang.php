<div class="card">
        <div class="header">
            <h2>DATA BARANG</h2>
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
                                        <th>Nama Barang</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah</th>
                                        <th>Kategori</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                    <?php 
                                        $number = 1;
                                        $ambil = $koneksi->query("SELECT * FROM barang");

                                        while ($pecah = $ambil->fetch_assoc()) {
                                       
                                     ?>

                                     <tr>
                                         <td><?php echo $number ?></td>
                                         <td><?php echo $pecah['nama_barang']; ?></td>
                                         <td><?php echo $pecah['deskripsi_barang'] ?></td>
                                         <td><?php echo $pecah['jumlah_barang'] ?></td>
                                         <td><?php echo $pecah['kategori_barang'] ?></td>
                                         <td><?php echo $pecah['foto_barang'] ?></td>

                                         <td><a class="btn btn-info" href="">Edit </a><a class=" btn btn-danger" href="hap"> Delete </a></td>
                                     </tr>
                                


                                    <?php 
                                    $number++;
                                    }
                                     ?>
                                </tbody>

        </div>
</div>


<div class="card">
        <div class="header">
            <h2>DATA ASISTEN</h2>
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
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jurusan</th>
                                        <th>Divisi</th>
                                        <th>No Telepon</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                    <?php 
                                        $number = 1;
                                        $ambil = $koneksi->query("SELECT * FROM asisten");

                                        while ($pecah = $ambil->fetch_assoc()) {
                                       
                                     ?>

                                     <tr>
                                         <td><?php echo $number ?></td>
                                         <td><?php echo $pecah['nama_asisten']; ?></td>
                                         <td><?php echo $pecah['birthdate_asisten'] ?></td>
                                         <td><?php echo $pecah['alamat_asisten'] ?></td>
                                         <td><?php echo $pecah['jurusan_asisten'] ?></td>
                                         <td><?php echo $pecah['divisi_asisten'] ?></td>
                                         <td><?php echo $pecah['notel_asisten'] ?></td>
                                     </tr>
                                


                                    <?php 
                                    $number++;
                                    }
                                     ?>
                                </tbody>



        </div>
</div>


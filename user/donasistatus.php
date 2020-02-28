    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                STATUS DONASI ANDA
                                <small>Berikut merupakan data barang yang pernah anda donasikan dan statusnya, silahkan dicek (klik kode pengiriman untuk mengisi nomor resi)</small>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Kode Pengiriman</th>
                                        <th>Nama Barang</th>
                                        <th>Jasa Pengiriman</th>
                                        <th>Nomor Resi/Pengiriman</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Kode Pengiriman</th>
                                        <th>Nama Barang</th>
                                        <th>Jasa Pengiriman</th>
                                        <th>Nomor Resi/Pengiriman</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!--proses-->
                                    <?php
                                        $id=$_SESSION['kosong'];
                                        $query=mysqli_query($con,"select * from donasi where iduser='$id' order by id desc");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><a href="index.php?halaman=form-isi-resi&id=<?php echo $a[0] ?>"><?php echo $a[0] ?></a></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td><?php echo $a[7] ?></td>
                                        <td><?php echo $a[8] ?></td>
                                        <td><?php echo $a[9] ?></td>
                                        <td><?php echo $a[10] ?></td>
                                    </tr>
                                    <?php } ?>
                                    <!--END Proses-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="js/pages/tables/jquery-datatable.js"></script>
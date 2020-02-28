    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Setting Donasi
                                <small>Setting Status donasi mana yang sudah diterima dan tidak diterima dan masih pengiriman (Klik status pengiriman untuk memperbaharui status)</small>
                            </h2>
                        </div>
                        <div class="body">
                        <?php
                                if(isset($_GET['pesan'])=='sukses')
                                echo "<div class='alert alert-success' role='alert'>Status donasi sudah diubah</div>";
                            ?>
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
                                        $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim' order by id desc");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><?php echo $a[0] ?></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td><?php echo $a[7] ?></td>
                                        <td><?php echo $a[8] ?></td>
                                        <td><?php echo $a[9] ?></td>
                                        <td><a href="index.php?halaman=perbaharui-status&id=<?php echo $a[0] ?>"><?php echo $a[10] ?></a></td>
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
    <script src="../../user/plugins/jquery/jquery.min.js"></script>

    <script src="../../user/js/pages/tables/jquery-datatable.js"></script>
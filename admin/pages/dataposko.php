    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Semua Donasi
                                <small>Berikut merupakan data donasi baik yang belum dikirim, sudah dikirim, maupun sudah diterima</small>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Status</th>
                                        <th>Korban Selamat</th>
                                        <th>Korban Luka-luka</th>
                                        <th>Korban Meninggal</th>
                                        <th>Prioritas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--proses-->
                                    <?php
                                        $query=mysqli_query($con,"select * from statusposko order by id desc");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><?php echo $a[0] ?></td>
                                        <td><?php echo $a[1] ?></td>
                                        <td><?php echo $a[2] ?></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td><?php echo $a[4] ?></td>
                                        <td><?php echo $a[5] ?></td>
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
    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Anggota
                                <small>Berikut semua data anggota yang mendaftar di BJB</small>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No.Hp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No.Hp</th>
                                        <th>Email</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!--proses-->
                                    <?php
                                        $query=mysqli_query($con,"select * from user order by id desc");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><img src="../../img/user/<?php echo $a[7] ?>" style="height:50px; width:50px;"></td>
                                        <td><?php echo $a[1] ?></td>
                                        <td><?php echo $a[2] ?></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td><?php echo $a[4] ?></td>
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
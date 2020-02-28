    
    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                RIWAYAT LOGIN
                                <small>Riwayat / Aktivitas login ke admin terbaru</small>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Tanggal / Jam</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Username</th>
                                        <th>tanggal / jam</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!--proses-->
                                    <?php
                                        $query=mysqli_query($con,"select * from riwayatlog order by id desc");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><?php echo $a[1] ?></td>
                                        <td><?php echo $a[2] ?></td>
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

    <script src="../../user/js/pages/ui/dialogs.js"></script>

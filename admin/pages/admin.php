    
    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA ADMIN
                                <small>Merupakan data-data admin, hapus admin yang sudah tidak berkepentingan</small>
                            </h2>
                        </div>
                        <div class="body">
                            <?php
                                if(isset($_GET['pesan'])=='true')
                                echo "<div class='alert alert-success' role='alert'>Salah satu admin telah dihapus</div>";
                            ?>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Kode Admin</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Kode Admin</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Tools</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!--proses-->
                                    <?php
                                        $query=mysqli_query($con,"select * from logadmin");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><?php echo $a[0] ?></td>
                                        <td><?php echo $a[1] ?></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info waves-effect">Tools</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="hapusadmin.php?idlog=<?php echo $a[0] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a></li>
                                            </ul>
                                        </div>
                                        </td>
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

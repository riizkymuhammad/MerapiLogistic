<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MASUKKAN RESI PENGIRIMAN
                                <small>masukkan resi pengiriman barang anda </small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--Proses Update-->
                        <?php
                        if(isset($_POST['ubah']))
                            {
                                    date_default_timezone_set('Asia/Jakarta');
                                    $tanggal = date("Y-m-d H:i:s");
                                    mysqli_query($con,"update donasi set noresi='$noresi',tanggal='$tanggal',status='Sudah Dikirim' where id='".$_GET['id']."'");
                                
                                echo "
                                <script>
                                location.assign('index.php?halaman=status-donasi');
                                </script>
                                ";
                            }
                            ?>
                        <!--END Proses Update-->


                            <form action="" method="POST" enctype="multipart/form-data">
                            <!--Proses Tampil-->
                            <?php
                                $id=$_GET['id'];
                                $query=mysqli_query($con,"select * from donasi where id='$id'");
                                while($a=mysqli_fetch_array($query)) {
                            ?>
                                <input type="hidden" id="id" class="form-control" name="id" value="<?php echo $a[0] ?>">
                                <label class="form-label">Nomor Resi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="noresi" class="form-control" name="noresi"  required>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="ubah" value="Selesaikan Donasi">
                                <?php } ?>
                                <!--END Proses Tampil-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
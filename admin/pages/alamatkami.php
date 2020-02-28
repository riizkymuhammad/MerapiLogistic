<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MASUKKAN ALAMAT PENGIRIMAN 
                                <small>masukkan alamat pengiriman untuk donasi </small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--Proses Update-->
                        <?php
                        if(isset($_POST['ubah']))
                            {
                                    mysqli_query($con,"update alamat set alamat='$alamat'");
                                
                                echo "
                                <script>
                                location.assign('index.php?halaman=alamat&pesan=sukses');
                                </script>
                                ";
                            }
                            if(isset($_GET['pesan'])=='sukses')
                                echo "<div class='alert alert-success' role='alert'>Alamat telah diupdate</div>";
                            ?>
                        <!--END Proses Update-->


                            <form action="" method="POST" enctype="multipart/form-data">
                            <!--Proses Tampil-->
                            <?php
                                $query=mysqli_query($con,"select * from alamat");
                                while($a=mysqli_fetch_array($query)) {
                            ?>
                                <input type="hidden" id="id" class="form-control" name="id" value="<?php echo $a[0] ?>">
                                <label class="form-label">Alamat</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="alamat" class="form-control no-resize" required><?php echo $a[1] ?></textarea>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="ubah" value="Ubah Alamat">
                                <?php } ?>
                                <!--END Proses Tampil-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
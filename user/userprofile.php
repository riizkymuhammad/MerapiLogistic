<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PROFILE || LENGKAPI PROFILE ANDA
                                <small>Lengkapi data anda </small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--Proses Update-->
                        <?php
                        if(isset($_POST['ubah']))
                            {
                                if(!empty($_FILES['foto']['tmp_name']))
                                { 
                                    unlink("../img/user/$gambar");
                                    $ext=strtolower(substr($_FILES['foto']['name'],-3));
                                    if($ext=='gif')
                                        $ext=".gif";
                                    else
                                        $ext=".png";
                                    move_uploaded_file($_FILES['foto']['tmp_name'], "../img/user/" . basename(($_GET['id']).$ext));
                                    
                                    mysqli_query($con,"update user set gambar='".$_GET['id'].$ext."',nama='$nama',alamat='$alamat', alamat='$alamat', no_hp='$no_hp', email='$email' where id='".$_GET['id']."'");
                                }
                                else
                                    mysqli_query($con,"update guru set nama='$nama',alamat='$alamat', alamat='$alamat', no_hp='$no_hp', email='$email' where id='".$_GET['id']."'");
                                
                                echo "
                                <script>
                                location.assign('index.php?halaman=dashboard&ps=true2');
                                </script>
                                ";
                            }
                            ?>
                        <!--END Proses Update-->


                            <form action="" method="POST" enctype="multipart/form-data">
                            <!--Proses Tampil-->
                            <?php
                                $id=$_GET['id'];
                                $query=mysqli_query($con,"select * from user where id='$id'");
                                while($a=mysqli_fetch_array($query)) {
                            ?>
                                <input type="hidden" id="id" class="form-control" name="id" value="<?php echo $a[0] ?>">

                                <label class="form-label">Nama Lengkap Anda</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $a[1] ?>" required>
                                    </div>
                                </div>

                                <label class="form-label">Alamat Lengkap Anda</label>
                                 <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="alamat" class="form-control no-resize" required><?php echo $a[2] ?></textarea>
                                        </div>
                                </div>

                                <label class="form-label">No. Telepon/Hp</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="no_hp" class="form-control" name="no_hp" value="<?php echo $a[3] ?>" required>
                                    </div>
                                </div>

                                <label class="form-label">E-Mail</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $a[4] ?>" required readonly>
                                    </div>
                                </div>

                                <label class="form-label">Gambar Profile</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" class="form-control" name="foto"  required>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="ubah" value="Perbaharui Profile">
                                <?php } ?>
                                <!--END Proses Tampil-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
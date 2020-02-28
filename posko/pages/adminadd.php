<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH Posko
                                <small>Jika anda menambah posko, maka posko yang dapat mengakses master web akan bertambah </small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--Proses Update-->
                        <?php
                        if(isset($_POST['simpan']))
                            {
                               $getId=mysqli_fetch_row(mysqli_query($con,"select max(idlog) from logadmin")); 
                                if(!empty($_FILES['foto']['tmp_name']))
                                { 
                                    $ext=strtolower(substr($_FILES['foto']['name'],-3));
                                    if($ext=='gif')
                                        $ext=".gif";
                                    else
                                        $ext=".png";
                                    move_uploaded_file($_FILES['foto']['tmp_name'], "../../img/admin/" . basename(($getId[0]+1).$ext));
                                }
                                
                                mysqli_query($con,"insert into logadmin values('','$nama','$email','$username','".md5($password)."','".($getId[0]+1).$ext."')");
                                
                                echo "
                                <script>
                                location.assign('index.php?halaman=add-admin&pesan=true');
                                </script>
                                ";
                            }
                                if(isset($_GET['pesan'])=='true')
                                echo "<div class='alert alert-success' role='alert'>Admin telah ditambah</div>";
                            ?>
                        <!--END Proses Update-->


                            <form action="" method="POST" enctype="multipart/form-data">
                            <!--Proses Tampil-->
                                <label class="form-label">Nama Lengkap</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama" required>
                                    </div>
                                </div>

                                <label class="form-label">E-Mail</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <label class="form-label">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control" name="username" required>
                                    </div>
                                </div>

                                <label class="form-label">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <label class="form-label">Gambar Profile</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" class="form-control" name="foto"  required>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="simpan" value="Tambah Admin">
                                <!--END Proses Tampil-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
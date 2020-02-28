<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PENGUBAHAN GAMBAR CAROUSEL
                                <small>Gambar carousel yang ditampilkan maksimal 3 </small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--Proses Update-->
                        <?php
                        if(isset($_POST['simpan']))

                            {   $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from carousel")); 
                                if(!empty($_FILES['foto']['tmp_name']))
                                { 
                                    $ext=strtolower(substr($_FILES['foto']['name'],-3));
                                    if($ext=='gif')
                                        $ext=".gif";
                                    else
                                        $ext=".png";
                                    move_uploaded_file($_FILES['foto']['tmp_name'], "../../img/carousel/" . basename(($getId[0]+1).$ext));
                                }
                                
                                mysqli_query($con,"insert into carousel values('','$judul','$keterangan','".($getId[0]+1).$ext."')");
                                
                                echo "
                                <script>
                                location.assign('index.php?halaman=pengolahan-web&pesan=true');
                                </script>
                                ";
                            }
                            if(isset($_GET['pesan'])=='true')
                                echo "<div class='alert alert-success' role='alert'>Carousel telah ditambah</div>";
                            ?>
                        <!--END Proses Update-->
                            <form action="" method="POST" enctype="multipart/form-data">
                            <!--Proses Tampil-->
                                <label class="form-label">Judul Carousel</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="judul" class="form-control" name="judul"  required>
                                    </div>
                                </div>

                                <label class="form-label">Keterangan</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="keterangan" class="form-control no-resize" required></textarea>
                                        </div>
                                </div>

                                <label class="form-label">Gambar Carousel</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" class="form-control" name="foto"  required>
                                    </div>
                                    <span style="color:RED;">*NB : Gambar Minimal Berukuran 1366 x 300 pixel</span>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="simpan" value="Simpan Carousel">
                                <!--END Proses Tampil-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
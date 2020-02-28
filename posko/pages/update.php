    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Kebutuhan Donasi
                                <small>Lengkapi data yang ingin anda kebutuhan bantuan posko <span style="color:RED;"</span></small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--proses simpan-->
                        <?php
                        if(isset($_POST['simpan']))

                            {   $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from kebutuhan")); 
                                if(!empty($_FILES['foto']['tmp_name']))
                                { 
                                    $ext=strtolower(substr($_FILES['foto']['name'],-3));
                                    if($ext=='gif')
                                        $ext=".gif";
                                    else
                                        $ext=".png";
                                    move_uploaded_file($_FILES['foto']['tmp_name'], "../img/donasi/" . basename(($getId[0]+1).$ext));
                                }
                                
                                mysqli_query($con,"insert into kebutuhan values('','$iduser','$nama','$namabarang','$alamat','$doa','".($getId[0]+1).$ext."','$jasapengirim','','','Belum Terkirim')");
                                
                                  echo "
                                <script>
                                location.assign('index.php?halaman=update-kebutuhan&pesan=true');
                                </script>
                                ";
                            }
                            if(isset($_GET['pesan'])=='true')
                                echo "<div class='alert alert-success' role='alert'>Terimakasih anda sudah berdonasi, silahkan isi nomor resi pengiriman anda</div>";
                            ?>
                        <!--END Proses Simpan-->
                            <form action="" method="POST" enctype="multipart/form-data">

                            <!--Proses-->
                             <?php 
                                $id=$_SESSION['kosong'];
                                $query=mysqli_query($con,"select * from user where id='$id'");
                                while($a=mysqli_fetch_array($query)) {
                                ?>
                                <input type="hidden" id="iduser" class="form-control" name="iduser" value="<?php echo $a[0] ?>">
                                <?php } ?>
                            <!--End Proses-->
                                
                               <!-- <label class="form-label">Jumlah Jiwa </label> -->
                                <label class="form-label">Paket Kebutuhan</label>
                                <div class="form-group">
                                    <select name="jasapengirim" class="form-control show-tick" data-live-search="true">
                                        <option>Pangan</option>
                                        <option>Sandang</option>
                                        <option>Lainya</option>
                                        <option>Kematian</option>
                                    </select>
                                </div>
                               <label class="form-label">Jumlah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama"  required>    
                                    </div>
                                </div>              
                                   
                                </div>

                                <!--Proses-->
                                <?php
                                $query=mysqli_query($con,"select * from alamat");
                                while($a=mysqli_fetch_array($query)) {
                                ?>
                                <label class="form-label">Alamat Kami</label>
                                 <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="alamatadmin" class="form-control no-resize" readonly><?php echo $a[1] ?></textarea>
                                        </div>
                                        <span style="color:RED;">*NB : Alamat diatas merupakan alamat tujuan pengiriman anda</span>
                                </div>
                                <?php } ?>
                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="simpan" value="DONASI SEKARANG">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SILAHKAN ISI FORM DONASI
                                <small>Lengkapi data yang ingin anda donasikan <span style="color:RED;">(untuk saat ini pengiriman hanya melalui JNE, TKI dan POS Indonesia)</span></small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--proses simpan-->
                        <?php
                        if(isset($_POST['simpan']))

                            {   $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from donasi")); 
                                if(!empty($_FILES['foto']['tmp_name']))
                                { 
                                    $ext=strtolower(substr($_FILES['foto']['name'],-3));
                                    if($ext=='gif')
                                        $ext=".gif";
                                    else
                                        $ext=".png";
                                    move_uploaded_file($_FILES['foto']['tmp_name'], "../img/donasi/" . basename(($getId[0]+1).$ext));
                                }
                                
                                mysqli_query($con,"insert into donasi values('','$iduser','$nama','$namabarang','$alamat','$doa','".($getId[0]+1).$ext."','$jasapengirim','','','Belum Terkirim')");
                                
                                  echo "
                                <script>
                                location.assign('index.php?halaman=donasi&pesan=true');
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
                                
                               <label class="form-label">Nama Pengirim</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama"  required>    
                                    </div>
                                </div>

                                <label class="form-label">Nama/Jenis Barang</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="namabarang" class="form-control" name="namabarang"  required>    
                                    </div>
                                </div>

                                <label class="form-label">Alamat Lengkap Anda</label>
                                 <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="alamat" class="form-control no-resize" required></textarea>
                                        </div>
                                </div>

                                <label class="form-label">Doa Anda</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="doa" class="form-control no-resize" required></textarea>
                                        </div>
                                </div>

                                <label class="form-label">Foto Barang</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="foto" class="form-control" name="foto"  required>
                                    </div>
                                </div>

                                <label class="form-label">Jasa Pengiriman</label>
                                <div class="form-group">
                                    <select name="jasapengirim" class="form-control show-tick" data-live-search="true">
                                        <option>JNE</option>
                                        <option>TIKI</option>
                                        <option>POS Indonesia</option>
                                    </select>
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
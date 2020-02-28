    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Status Posko
                                <small>Lengkapi data yang ingin anda kebutuhan bantuan posko <span style="color:RED;"</span></small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--proses simpan-->
                        <?php
                        if(isset($_POST['simpan']))

                            {   $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from statusposko")); 
                                if(!empty($_FILES['foto']['tmp_name']))
                                { 
                                    $ext=strtolower(substr($_FILES['foto']['name'],-3));
                                    if($ext=='gif')
                                        $ext=".gif";
                                    else
                                        $ext=".png";
                                    move_uploaded_file($_FILES['foto']['tmp_name'], "../img/donasi/" . basename(($getId[0]+1).$ext));
                                }

                                  //selamat
                                if($selamat < 150){
                                    $MDS = 0.25;
                                    $MBS = 0.75;              
                                    $MDS2 = 0.25;
                                    $MBS2 = 0.50;
                                    $MDS3 = 0.25;
                                    $MBS3 = 0.25;   
                                }if($selamat < 300 && $selamat >150){
                                    $MDS = 0.25;
                                    $MBS = 0.50;              
                                    $MDS2 = 0.25;
                                    $MBS2 = 0.75;
                                    $MDS3 = 0.25;
                                    $MBS3 = 0.50; 
                                }if($selamat > 300){
                                    $MDS = 0.25;
                                    $MBS = 0.25;              
                                    $MDS2 = 0.25;
                                    $MBS2 = 0.25;
                                    $MDS3 = 0.25;
                                    $MBS3 = 0.75; 
                                }

                                //luka-luka
                                if($lukaluka <150){
                                    $MDL = 0.25;
                                    $MBL = 0.25;              
                                    $MDL2 = 0.25;
                                    $MBL2 = 0.25;
                                    $MDL3 = 0.25;
                                    $MBL3 = 0.75; 
                                }if($lukaluka < 300 && $selamat >150){
                                    $MDL = 0.25;
                                    $MBL = 0.50;              
                                    $MDL2 = 0.25;
                                    $MBL2 = 0.75;
                                    $MDL3 = 0.25;
                                    $MBL3 = 0.50;  
                                }if($lukaluka > 300){
                                    $MDL = 0.25;
                                    $MBL = 0.75;              
                                    $MDL2 = 0.25;
                                    $MBL2 = 0.50;
                                    $MDL3 = 0.25;
                                    $MBL3 = 0.25;  
                                }
                                
                                //meninggal
                                if($meninggal <150){
                                    $MDM = 0.25;
                                    $MBM = 0.25;              
                                    $MDM2 = 0.25;
                                    $MBM2 = 0.50;
                                    $MDM3 = 0.25;
                                    $MBM3 = 0.75; 
                                }if($meninggal < 300 && $meninggal >150){
                                    $MDM = 0.25;
                                    $MBM = 0.50;              
                                    $MDM2 = 0.25;
                                    $MBM2 = 0.75;
                                    $MDM3 = 0.25;
                                    $MBM3 = 0.50; 
                                }if($meninggal > 300){
                                    $MDM = 0.25;
                                    $MBM = 0.75;              
                                    $MDM2 = 0.25;
                                    $MBM2 = 0.25;
                                    $MDM3 = 0.25;
                                    $MBM3 = 0.25;  
                                }

                                //status
                                if($status == "Awas"){
                                    $MDG = 0.25;
                                    $MBG = 0.25;              
                                    $MDG2 = 0.25;
                                    $MBG2 = 0.25;
                                    $MDG3 = 0.75;
                                    $MBG3 = 0.75; 
                                }if($status == "Siaga"){
                                    $MDG = 0.25;
                                    $MBG = 0.50;              
                                    $MDG2 = 0.25;
                                    $MBG2 = 0.75;
                                    $MDG3 = 0.25;
                                    $MBG3 = 0.50;  
                                }if($status == "Waspada"){
                                    $MDG = 0.25;
                                    $MBG = 0.75;              
                                    $MDG2 = 0.25;
                                    $MBG2 = 0.50;
                                    $MDG3 = 0.25;
                                    $MBG3 = 0.25;  
                                }

                                //HITUNG PRIORITAS 1
                                $P1_MDS = $MDS + $MDL *(1-$MDS);
                                $P1_MBS = $MBS + $MBL *(1-$MBS);
                                $P1_MDL = $P1_MDS + $MDM *(1-$P1_MDS);
                                $P1_MBL = $P1_MBS + $MBM *(1-$P1_MBS);
                                $P1_MDM = $P1_MDL + $MDG *(1-$P1_MDL);
                                $P1_MBM = $P1_MBL + $MBG *(1-$P1_MBL);

                                $CF1 = $P1_MBM - $P1_MDM;

                                //HITUNG PRIORITAS 2
                                $P2_MDS = $MDS2 + $MDL2 *(1-$MDS2);
                                $P2_MBS = $MBS2 + $MBL2 *(1-$MBS2);
                                $P2_MDL = $P2_MDS + $MDM2 *(1-$P2_MDS);
                                $P2_MBL = $P2_MBS + $MBM2 *(1-$P2_MBS);
                                $P2_MDM = $P2_MDL + $MDG2 *(1-$P2_MDL);
                                $P2_MBM = $P2_MBL + $MBG2 *(1-$P2_MBL);

                                $CF2 = $P2_MBM - $P2_MDM;

                                //HITUNG PRIORITAS 3
                                $P3_MDS = $MDS3 + $MDL3 *(1-$MDS3);
                                $P3_MBS = $MBS3 + $MBL3 *(1-$MBS3);
                                $P3_MDL = $P3_MDS + $MDM3 *(1-$P3_MDS);
                                $P3_MBL = $P3_MBS + $MBM3 *(1-$P3_MBS);
                                $P3_MDM = $P3_MDL + $MDG3 *(1-$P3_MDL);
                                $P3_MBM = $P3_MBL + $MBG3 *(1-$P3_MBL);

                                $CF3 = $P3_MBM - $P3_MDM;

                                if($CF1>$CF2 && $CF1>$CF3){
                                    $prioritas = "prioritas 1";
                                }else if($CF2>$CF1 && $CF2>$CF3){
                                    $prioritas = "prioritas 2";
                                }else if($CF3>$CF1 && $CF3>$CF2){
                                    $prioritas = "prioritas 3";
                                }




                                mysqli_query($con,"insert into statusposko values('','$status','$selamat','$lukaluka','$meninggal','$prioritas')");
                                
                                  echo "
                                <script>
                                location.assign('index.php?halaman=update-status&pesan=true');
                                </script>
                                ";
                            }
                            if(isset($_GET['pesan'])=='true')
                                echo "<div class='alert alert-success' role='alert'>Terimakasih sudah mengupdate info anda</div>";

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
                                <label class="form-label">Status Gununug Merapi</label>
                                <div class="form-group">
                                    <select name="status" class="form-control show-tick" >
                                        <option>Waspada</option>
                                        <option>Siaga</option>
                                        <option>Awas</option>
                                    </select>
                                </div>
                               <label class="form-label">Jumlah Selamat</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="selamat" class="form-control" name="selamat"  required>    
                                    </div>
                                </div> 
                                <label class="form-label">Jumlah Luka-luka</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="lukaluka" class="form-control" name="lukaluka"  required>    
                                    </div>
                                </div>  
                                <label class="form-label">Jumlah Meninggal</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="meninggal" class="form-control" name="meninggal"  required>    
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
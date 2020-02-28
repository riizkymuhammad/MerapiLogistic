<!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH PASSWORD ANDA
                                <small>ubah password dengan yang baru </small>
                            </h2>
                        </div>
                        <div class="body">

                        <!--Proses Update-->
                            <script type="text/javascript">
                                function validasi(){
                                    var p=ubah.passwordbaru.value;
                                    var u=ubah.passwordbaru1.value;
                                    if(p !== u ){
                                        alert("Pengisian kata sandi harus sama");
                                        ubah.passwordbaru1.focus();
                                        return false;
                                    }
                                    return true;
                                }
                                </script>
                        <?php
                        if(isset($_POST['ubah']))
                            {
                                   if(!($passwordbaru=$passwordbaru1)){
                                            echo "
                                            <script>
                                            location.assign('index.php?halaman=setting&pesan1=kesalahan1');
                                            </script>
                                            ";

                                        }else{
                                            mysqli_query($con,"update user set password='".md5($passwordbaru)."' where id='".$_GET['id']."'");
                                
                                            echo "
                                            <script>
                                            location.assign('index.php?halaman=dashboard&pesan2=sukses');
                                            </script>
                                            ";

                                        }
                            }
                            if(isset($_GET['pesan1'])=='kesalahan1')
                                echo "<div class='alert alert-danger' role='alert'>kata sandi baru tidak cocok dengan kata sandi ke-2!</div>";
                         ?>

                        <!--END Proses Update-->


                            <form action="" method="POST" name="ubah" enctype="multipart/form-data" onsubmit="return validasi()">
                            <!--Proses Tampil-->
                            <?php
                                $id=$_GET['id'];
                                $query=mysqli_query($con,"select * from user where id='$id'");
                                while($a=mysqli_fetch_array($query)) {
                            ?>
                                <input type="hidden" id="id" class="form-control" name="id" value="<?php echo $a[0] ?>">

                                <label class="form-label">Kata Sandi Baru</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="passwordbaru" class="form-control" name="passwordbaru"  required>
                                    </div>
                                </div>

                                <label class="form-label">Ulangi Kata Sandi Baru</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="passwordbaru1" class="form-control" name="passwordbaru1"  required>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="ubah" value="Perbaharui Password">
                                <?php } ?>
                                <!--END Proses Tampil-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Vertical Layout | With Floating Label -->
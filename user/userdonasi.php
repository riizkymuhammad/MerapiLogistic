<!-- Image Gallery -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR DONASI Merapi Logistic
                                <small>ini merupakan daftar donasi semua user yang pernah berdonasi di Merapi Logistic</small>
                            </h2>
                        </div>

                        <!--Proses-->
                        <?php
                        include"koneksi.php";
                            $per_hal=16;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from donasi");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            ?>
                        <!--END Proses-->
                        <div class="body">
                        
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <!--Proses tampil-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim' or status='Sudah Diterima'");
                                while($a=mysqli_fetch_array($query)) {
                        ?>
                        <!--END Proses Tampil-->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../img/donasi/<?php echo $a[6] ?>" data-sub-html="Dari : <?php echo $a[2] ?> Nama/Jenis Barang : <?php echo $a[3] ?> Doa : <?php echo $a[5] ?> ">
                                        <img class="img-responsive thumbnail" src="../img/donasi/<?php echo $a[6] ?>" style="height:200px; width:200px;">
                                    </a>
                                </div>
                        <?php } ?>
                            </div>
                            <ul class="pagination">         
                            <?php 
                            for($x=1;$x<=$halaman;$x++){
                                ?>
                                <li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
                                <?php
                            }
                            ?>                      
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/medias/image-gallery.js"></script>
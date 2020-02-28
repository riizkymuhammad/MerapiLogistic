            <!-- With Captions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">

                                <!--Proses-->

                                    <?php
                                        $query=mysqli_query($con,"select * from carousel");
                                        while($data=mysqli_fetch_array($query)){
                                    ?>
                                    <div class="item active">
                                        <img src="../img/carousel/<?php echo $data[3] ?>" />
                                        <div class="carousel-caption">
                                            <h3><?php echo $data[1] ?></h3>
                                            <p><?php echo $data[2] ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                <!--END Proses-->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
                  <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">TERKIRIM</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="15" data-fresh-interval="20"></div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi where status='Belum Terkirim'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">BELUM DIKIRIM</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from donasi");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">JUMLAH DONASI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">

                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"select * from user");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->

                            <div class="text">ANGGOTA DONASI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <!-- Basic Card -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Apa itu BJB ? <small>Deskripsi dibawah...</small>
                            </h2>
                        </div>
                        <div class="body">
                           BJB adalah tempat  kita untuk mendonasikan barang bekas yang berguna ke anak yatim piatu di panti asuhan dan yang membutuhkan.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Siapa Penerima BJB ? <small>Deskripsi dibawah...</small>
                            </h2>
                        </div>
                        <div class="body">
                          Barang akan diterima oleh kami sebagai penyelenggara, dan  akan kami kirim ke panti asuhan dan yang membutuhkan.
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Apa Saja Donasinya ? <small>Deskripsi dibawah...</small>
                            </h2>
                        </div>
                        <div class="body">
                          BJB merupakan donasi barang-barang yang sudah tidak terpakai tapi masih bisa digunakan seperti mainan, baju dll.
                        </div>
                    </div>
                </div>
            <!-- #END# Basic Card -->
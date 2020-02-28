            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BACKUP & RESTORE
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">cloud_download</i> Backup
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">cloud_done</i> Restore
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <b>Backup Database</b>
                                    <p>
                                    <form action="" method="post">
                                    <input type="submit" class="btn btn-block btn-lg btn-primary waves-effect" name="submit" value="Backup Sekarang">
                                    </form>
                                    </p>
                                    <!--Proses Backup-->
                                    <?php
                                     if(isset($_POST['submit'])){

                                       $db_host = "localhost";
                                        $db_user    = "root";
                                        $db_pass    = "";
                                        $db_name    = "donasi";

                                        $konek  = mysql_connect($db_host,$db_user,$db_pass,$db_name) or die ("Gagal koneksi ke server");

                                        mysql_close($konek);

                                        $date=date('d-m-Y-g-i-s');
                                        $file="backup@".$date.".sql";

                                        $command = "mysqldump -u root donasi > backup/$file";

                                        $backup=exec($command);



                                        // header yang menunjukkan nama file yang akan didownload
                                            header("Content-Disposition: attachment; filename=$file");
                                         
                                            // header yang menunjukkan ukuran file yang akan didownload
                                            header("Content-length: $file ");
                                         
                                            // header yang menunjukkan jenis file yang akan didownload
                                            header("Content-type:$file ");
                                         
                                           // proses membaca isi file yang akan didownload dari folder 'data'
                                           $fp  = fopen("backup/".$file, 'r');
                                           $content = fread($fp, filesize('backup/'.$file));
                                           fclose($fp);
                                         
                                           // menampilkan isi file yang akan didownload
                                           echo $content;

                                        if ($backup) {
                                        echo "<script>alert('Berhasil Backup.Nama File = $file');</script>";
                                        } else {
                                        echo "<script>alert('Gagal Backup !');</script>";
                                        }  


                                        exit;
                                    }
                                    ?>
                                    <!--END Proses Backup-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <b>Restore Database</b>
                                    <p>
                                    <form enctype="multipart/form-data" action="" method="post">
                                    <label class="form-label">Pilih Database Yang Ingin Di Restore(.sql)</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="gambar" class="form-control" name="datafile"  required>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" onclick="return confirm('Apakah Anda yakin akan restore database?')" class="btn btn-block btn-lg btn-primary waves-effect" name="restore" value="Restore Sekarang">
                                    </form>
                                        
                                    </p>
                                    <?php
                                     if(isset($_POST['backup'])){

                                     }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
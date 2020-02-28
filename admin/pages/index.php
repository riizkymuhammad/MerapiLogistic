<?php
session_start();
if(empty($_SESSION['kosong']))
header("location:login/index.php");
    
extract($_POST);
$con=mysqli_connect('localhost','root','','donasi');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Merapi Logistik</title>
    <!-- Favicon-->
    <link rel="icon" href="../../img/logo5.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../user/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../user/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../user/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Light Gallery Plugin Css -->
    <link href="../../user/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="../../user/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Multi Select Css -->
    <link href="../../user/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../user/css/style.css" rel="stylesheet">

    <link href="../../user/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../user/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../../user/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../user/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="theme-pink">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><b>Merapi Logistik</b></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                    <!--Proses-->
                            <?php 
                                $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                                ?>
                            <?php } ?>
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count"><?php echo $jumlah ?></span>
                            </a>
                                <!--End Proses-->
                        <ul class="dropdown-menu">
                            <li class="header">PEMBERITAHUAN</li>
                            <li class="body">
                            <!--Proses-->
                            <?php 
                                $query=mysqli_query($con,"select * from donasi where status='Sudah Dikirim' ORDER BY id DESC limit 0,8");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                                ?>
                                <ul class="menu">
                                    <li>
                                        <a href="index.php?halaman=perbaharui-status&id=<?php echo $a[0] ?>">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">info_outline</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><?php echo $a[10] ?></h4>
                                                <p>
                                                    <i class="material-icons">account_circle</i> <?php echo $a[2] ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <?php } ?>
                            <!--END Proses-->
      
                          </li>
                            <li class="footer">
                                <a href="index.php?halaman=pengolahan-donasi">Semua Pemberitahuan</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->

            <!--Proses-->
            <?php 
            $id=$_SESSION['kosong'];
            $query=mysqli_query($con,"select * from logadmin where idlog='$id'");
            while($a=mysqli_fetch_array($query)) {
            ?>
            <div class="user-info">
                <div class="image">
                    <img src="../../img/admin/<?php echo $a[5] ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $a[1] ?></div>
                    <div class="email"><?php echo $a[2] ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.php?halaman=setting&id=<?php echo $a[0] ?>"><i class="material-icons">settings</i>Ubah Password</a></li>
                            <li role="seperator" class="divider"></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="log-out.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>          
            <!--END Proses-->
            <!-- #User Info -->
            <!-- Menu -->
            
            <?php include"menu.php"; ?>


            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Merapi Logistic</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">

        <!--isi-->

                    <?php 
                        if(isset($_GET['halaman']))
                        {
                         switch($_GET['halaman'])
                        {

                            case 'dashboard': include'home.php'; break;

                            case 'data-donasi': include'donasistatus.php'; break;

                            case 'data-posko': include'dataposko.php'; break;

                            case 'daftar-donasi': include'userdonasi.php'; break;

                            case 'pengolahan-web': include'settingweb.php'; break;

                            case 'carousel': include'carousel.php'; break;

                            case 'alamat': include'alamatkami.php'; break;

                            case 'add-admin': include'adminadd.php'; break;

                             case 'add-posko': include'poskoadd.php'; break;

                            case 'data-admin': include'admin.php'; break;

                            case 'data-anggota': include'dataanggota.php'; break;

                            case 'pengolahan-donasi': include'settingdonasi.php'; break;

                            case 'pengolahan-posko': include'settingposko.php'; break;

                            case 'perbaharui-status': include'donestatus.php'; break;

                            case 'riwayat-login': include'login.php'; break;

                            case 'backup-restore': include'backup.php'; break;

                            
                            
                        }   
                        }
                    ?>

        <!--END isi-->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../user/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../user/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../user/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../user/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../user/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../../user/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../../user/plugins/raphael/raphael.min.js"></script>
    <script src="../../user/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../../user/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../../user/plugins/flot-charts/jquery.flot.js"></script>
    <script src="../../user/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../../user/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../../user/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../../user/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../../user/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../user/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../user/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../user/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../user/js/admin.js"></script>
    <script src="../../user/js/pages/index.js"></script>
    <script src="../../user/js/pages/tables/jquery-datatable.js"></script>
    <script src="../../user/js/pages/forms/advanced-form-elements.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="../../user/plugins/multi-select/js/jquery.multi-select.js"></script>

    <script src="../../user/plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Custom Js -->
    <script src="../../user/js/pages/medias/image-gallery.js"></script>
    <script src="../../user/js/pages/ui/dialogs.js"></script>
    <script src="../../user/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../../user/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Demo Js -->
    <script src="../../user/js/demo.js"></script>
</body>
</html>
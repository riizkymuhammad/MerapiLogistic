<?php
extract($_POST);
$con=mysqli_connect('localhost','root','','donasi');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registrasi Merapi Logistic</title>
    <!-- Favicon-->
    <link rel="icon" href="img/logo5.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="user/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="user/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="user/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="user/css/style.css" rel="stylesheet">
</head>
<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Merapi Logistic</b></a>
            <small>Efektif Dan Efisien Tanpa Ribet - silahkan daftar untuk donasi</small>
        </div>
        <div class="card">
            <div class="body">

            <!--Proses-->
                <?php
                if(isset($_POST['simpan']))
                {    
                    $query=mysqli_query($con,"select username from user where username='$username'");
                    $cek=mysqli_num_rows($query);

                    if ($cek > 0){

                        echo"
                        <script>
                        location.assign('sign-up.php?ps2=danger');
                        </script>
                        ";
                    } else if($cek <=0 ){
                        $query=mysqli_query($con,"select email from user where email='$email'");
                        $cek1=mysqli_num_rows($query);
                            if($cek1 > 0){

                            echo"
                            <script>
                            location.assign('sign-up.php?ps3=danger');
                            </script>
                            "; 
                            }
                            else{
                            mysqli_query($con,"insert into user values('','$nama','','','$email','$username','".md5($password)."','user.png')");
                    
                             echo "
                            <script>
                            location.assign('sign-up.php?ps1=true1');
                            </script>
                            ";
                                }
                        }

                    }
                /*pesan berhasil update*/
               if(isset($_GET['ps1'])=='true1')
                    echo "<div class='alert alert-success' role='alert'>Anda sudah berhasil mendaftar</div>";
               elseif(isset($_GET['ps2'])=='danger')
                    echo "<div class='alert alert-danger' role='alert'>Terdapat username yang sama !</div>";
               elseif(isset($_GET['ps3'])=='danger')
                    echo "<div class='alert alert-danger' role='alert'>E-Mail Tidak Valid !</div>";

                ?>

            <!--Tutup Proses-->

                <form id="sign_up" action="" method="POST">
                    <div class="msg">Daftar sekarang untuk bisa berdonasi</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="E-Mail" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Kata Sandi" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Ulangi Kata Sandi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <input class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="simpan" value="DAFTAR SEKARANG">

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.php">Saya sudah punya akun?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="user/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="user/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="user/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="user/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="user/js/admin.js"></script>
    <script src="user/js/pages/examples/sign-up.js"></script>
</body>

</html>
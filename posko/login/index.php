<?php
session_start();
extract($_POST);
$con=mysqli_connect('localhost','root','','donasi');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Merapi Logistic Posko Login</title>
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

    <!-- Custom Css -->
    <link href="../../user/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Posko Merapi Logistik</b></a>
            <small>Merapi Logistik - Khusus posko</small>
        </div>
        <div class="card">
            <div class="body">

                <!--Proses-->
                <?php
                if(isset($login)){
                    date_default_timezone_set('Asia/Jakarta');
                    $tanggal = date("Y-m-d H:i:s");
                    $query=mysqli_query($con,"insert into riwayatlog values('','$username','$tanggal')");
                    if($query){
                    $password=mysqli_real_escape_string($con, md5($_POST['password']));
                    if(mysqli_num_rows(mysqli_query($con,"select idlog from logposko where username='$username' and password='$password'")))
                    {
                      $tipe=mysqli_fetch_row(mysqli_query($con,"select idlog  from logposko where username='$username' and password='$password'"));
                        $_SESSION['kosong']=$tipe[0];
                        header("location:../pages/index.php?halaman=dashboard");
                        
                    }
                    else
                        $ps="
                            <div class='row'>
                            <div class='col-xs-12'>
                            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <h4><i class='icon glyphicon glyphicon-remove'></i> Wrong !</h4> Wrong username or password :(
                            </div>
                            </div>
                            </div>
                        ";
                        echo $ps;
                }
                }
                ?>
                <!--END Proses-->
                <form id="sign_in" action="" method="POST">
                    <div class="msg">Login khusus posko</div>
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
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-block bg-pink waves-effect" name="login" value="Login">
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../user/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../user/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../user/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../user/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../user/js/admin.js"></script>
    <script src="../../user/js/pages/examples/sign-in.js"></script>
</body>

</html>
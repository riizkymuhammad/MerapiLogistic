<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Lupa password | BJB</title>
    <!-- Favicon-->
    <link rel="icon" href="img/logo-title.png" type="image/x-icon">

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

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>BJB</b></a>
            <small>Barang Bekas Jadi Berkah - silahkan masuk untuk donasi</small>
        </div>
        <div class="card">
            <div class="body">



            <!--Proses-->
            <?php
             if(isset($_POST['submit']))
             {
                extract($_POST);
                $con=mysqli_connect('localhost','root','','donasi');

                $query1=mysqli_query($con,"select * from user where email='$email'");
                $cek=mysqli_num_rows($query1);
                while($data=mysqli_fetch_array($query1)){
                    if($cek > 0){
                    $query=mysqli_query($con,"update user set password='".md5($data[0])."' where email='$email'");
                    if($query){

                        $headers = "From: BJB Bekas Jadi Berkah\r\n";
                            @mail("$data[1]","informasi login","berikut data login untuk website BJB USERNAME= $data[5], PASSWORD= $data[0]", $headers);

                        header("location:forgot-password.php?pesan=cek-email");
                    }
                }

                }
             }
             if(isset($_GET['pesan'])=='cek-email')
              echo "<div class='alert alert-success' role='alert'>Cek E-Mail anda untuk reset password</div>";
             ?>

            <!--END Proses-->
                <form id="forgot_password" action="" method="POST">
                    <div class="msg">
                        Masukkan E-Mail yang terdaftar saat mendaftar di BJB, kemudian cek E-Mail untuk reset password
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <input class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit" value="ATUR ULANG PASSWORD">

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in.php">Log in!</a>
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
    <script src="user/js/pages/examples/forgot-password.js"></script>
</body>

</html>
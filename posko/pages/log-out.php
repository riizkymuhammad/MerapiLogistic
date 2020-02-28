<?php
session_start();
unset($_SESSION['kosong']); 
header("location:../login/index.php");
?>
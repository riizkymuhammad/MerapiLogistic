<?php 
$con=mysqli_connect('localhost','root','','donasi');
$id=$_GET['idlog'];
$query=mysqli_query($con,"delete from logadmin where idlog='$id'");
if($query){
	echo "
       <script>
       location.assign('index.php?halaman=data-admin&pesan=true');
       </script>
       ";
}
?>
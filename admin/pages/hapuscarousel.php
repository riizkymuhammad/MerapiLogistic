<?php 
$con=mysqli_connect('localhost','root','','donasi');
$id=$_GET['id'];
$query=mysqli_query($con,"delete from carousel where id='$id'");
if($query){
	echo "
       <script>
       location.assign('index.php?halaman=carousel&pesan=true');
       </script>
       ";
}
?>
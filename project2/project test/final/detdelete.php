<?php

$db=mysqli_connect("localhost","root","","first_db1");

$id=$_GET['id1'];
$doctor=$_GET['doctor'];

$sql="DELETE from details WHERE `doctor`='$doctor'";

$query=mysqli_query($db,$sql);


  header("location:add.php");


?>
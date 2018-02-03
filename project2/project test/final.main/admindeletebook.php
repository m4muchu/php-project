<?php

$db=mysqli_connect("localhost","root","","first_db1");

$id=$_GET['id1'];
$username=$_GET['username'];
$doctor=$_GET['doctor'];
$sql="DELETE from booking WHERE username='$username' AND doctor='$doctor'";

$query=mysqli_query($db,$sql);


  header("location:adminbook.php");


?>
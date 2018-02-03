<?php

$db=mysqli_connect("localhost","root","","first_db1");

$id=$_GET['id1'];
$username=$_GET['username'];

$sql="DELETE from users WHERE `username`='$username'";

$query=mysqli_query($db,$sql);


  header("location:adminreg.php");


?>
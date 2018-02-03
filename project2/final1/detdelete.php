<?php
 session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }
   
$db=mysqli_connect("localhost","root","","first_db1");

$id=$_GET['id1'];
$doctor=$_GET['doctor'];

$sql="DELETE from details WHERE `doctor`='$doctor'";
$sql1="DELETE from booking WHERE `doctor`='$doctor'";

$query=mysqli_query($db,$sql);
$query1=mysqli_query($db,$sql);

  header("location:add.php");


?>
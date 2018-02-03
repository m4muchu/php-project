<?php
 session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $db = mysqli_connect("localhost","root","") or die(mysqli_error());

    $department = mysqli_real_escape_string($db,$_POST['department']);

    // echo "<a href ='hospital.php?hospitalname=".$hospitalname."'</a>"; 

    header("location:department.php?department=$department");

}


?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $db = mysqli_connect("localhost","root","") or die(mysqli_error());

    $department = mysqli_real_escape_string($db,$_POST['department']);

    // echo "<a href ='hospital.php?hospitalname=".$hospitalname."'</a>"; 

    header("location:department.php?department=$department");

}


?>
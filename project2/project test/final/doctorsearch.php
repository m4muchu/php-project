<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $db = mysqli_connect("localhost","root","") or die(mysqli_error());

    $doctor = mysqli_real_escape_string($db,$_POST['doctorname']);

    // echo "<a href ='hospital.php?hospitalname=".$hospitalname."'</a>"; 

    header("location:doctor.php?doctor=$doctor");

}


?>
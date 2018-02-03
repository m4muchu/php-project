<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $db = mysqli_connect("localhost","root","") or die(mysqli_error());

    $hospitalname = mysqli_real_escape_string($db,$_POST['hospitalname']);

    // echo "<a href ='hospital.php?hospitalname=".$hospitalname."'</a>"; 

    header("location:hospital.php?hospital=$hospitalname");

}


?>
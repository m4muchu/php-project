

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $bool = "true";

    $db = mysqli_connect("localhost","root","") or die(mysqli_error());

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $number = mysqli_real_escape_string($db,$_POST['number']);


    mysqli_select_db($db,"first_db1") or die("cannot connect database");

    $query = mysqli_query($db,"Select * from users");

    while($row = mysqli_fetch_array($query)){

        $table_user = $row['username'];

        if($username == $table_user){
            $bool = false;
             Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
             Print '<script>window.location.assign("login.php");</script>'; // redirects to register.php
        }

    }

        if($bool){
            mysqli_query($db,"INSERT INTO users (username, password,email,number,ROLE) VALUES ('$username','$password','$email','$number','')"); //Inserts the value to table users
            Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
            Print '<script>window.location.assign("login.php");</script>'; // redirects to register.php



        }

    

}
?>
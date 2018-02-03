<html>
<head><title>register</title></head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
 <style type="text/css">
 body{
     font : 14px sans-serif;
     background-color : #acc9e3;
 }

 
 .wrapper{
     width:350px;
     padding:20px;

 }

 

 #username{
     padding: 10px;
 }

 #submit{
     padding: 10px;
     
 }
 </style>
<body>

<div class=wrapper>
    <h2>Register</h2>
    <form action="register.php" method="POST">
    <div id="username">
    Username: </br><input type="text" name="username" required="required" /></br>
    </div>
    <div id="username">
    Password:</br> <input  id="input" type="password" name="password" reqired="reqired"/></br>
    </div>

    <div id="username">
    Email:</br> <input type="email" name="email" reqired="reqired"/></br>
    </div>
    <div id="username">
    Mobile-Number:</br> <input type="number" name="number" reqired="reqired"/></br>
    </div>

    <div id="submit">
    <input type="submit" value="Register"/>
    
</div>
    </form>

</div>    
</body>

</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $bool = "true";

    $db = mysqli_connect("localhost","root","") or die(mysqli_error());

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $number = mysqli_real_escape_string($db,$_POST['number']);
   

    mysqli_select_db($db,"first_db") or die("cannot connect database");

    $query = mysqli_query($db,"Select * from users");

    while($row = mysql_fetch_array($query)){

        $table_user = $row['username'];

        if($username == $table_user){
            $bool = false;
             Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
             Print '<script>window.location.assign("register.html");</script>'; // redirects to register.php
        }

    }

        if($bool){
            mysqli_query($db,"INSERT INTO users (username, password,email,number) VALUES ('$username','$password','$email','$number')"); //Inserts the value to table users
            Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
            header("location: login.html"); // redirects to register.php



        }

    

}
?>

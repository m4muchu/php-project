<?php 

echo "
<html>
<head><title>Admin Registration</title></head>
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
 <style type='text/css'>
 body{
     font : 14px sans-serif;
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
    <h2>Edit</h2>
    <form action='' method='POST'>
    <div id='username'>
    Username: </br><input type='text' name='username' required='required' value=".$_GET['username']." ></br>
    <input type='hidden' name='id' value=".$_GET['id'].">
    </div>
    <div id='username'>
    Password:</br> <input type='text' name='password' reqired='reqired' value=".$_GET['password']."></br>
    </div>

    <div id='username'>
    Email:</br> <input type='email' name='email' reqired='reqired' value=".$_GET['email']."></br>
    </div>
    <div id='username'>
    Mobile-Number:</br> <input type='text' name='number' reqired='reqired' value=".$_GET['number']."></br>
    </div>

    <div id='submit'>
    <input type='submit' value='update' name='submit'/>
    
</div>
    </form>

</div>    
</body>

</html>";


if(isset($_POST['submit']))
{

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$number=$_POST['number'];



$sql= "UPDATE users SET `username`='$username',`password`='$password',`email`='$email',`number`='$number' WHERE `id`='$id'";
$db= mysqli_connect("localhost", "root","","first_db1") or die(mysqli_error());

$query=mysqli_query($db,$sql);
header("location:adminreg.php");


}
?>
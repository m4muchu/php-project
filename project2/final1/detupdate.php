<?php 
 session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }
echo "
<html>
    <head>
        <title>DEPARTMENTS</title>
    </head>
    <body>
        <h2></h2>
        <a href='index.php'>Click here to go back<br/></a><br/>
        <form action='' method='POST'>
         DOCTOR NAME: <input type='text' name='doctor'  required='required' value=".$_GET['doctor']."> <br/>
           <input type='hidden' name='id' value=".$_GET['id'].">
            HOSPITAL NAME: <input type='text' name='hospital'  required='required' value=".$_GET['hospital']."> <br/>
           
           DEPARTMENT NAME: <input type='text' name='department'  required='required' value=".$_GET['department']."> <br/>
           
            Ph.No : <input type='text' name='number'  required='required' value=".$_GET['number']."> <br/>
           
            E-mail: <input type='email' name='email'  required='required' value=".$_GET['email']."> <br/>
      
           
           <input type='submit' value='update' name='submit'/>
        </form>
    </body>
</html>";


if(isset($_POST['submit']))
{

$id=$_POST['id'];
$doctor=$_POST['doctor'];
$hospital=$_POST['hospital'];
$department=$_POST['department'];
$number=$_POST['number'];
$email=$_POST['email'];


$sql= "UPDATE `details` SET `doctor`='$doctor',`hospital`='$hospital',`department`='$department',`number`='$number',`email`='$email'  WHERE `id`='$id'";
$db= mysqli_connect("localhost", "root","","first_db1") or die(mysqli_error());

$query=mysqli_query($db,$sql);
header("location:add.php");


}
?>

 <html>
    <head>
        <title>Booking</title>
    </head>
<body>
<?php
$i=1;
   session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location: ../index.php"); // redirects if user is not logged in
   }

$db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
mysqli_select_db($db,"first_db1");



   $dname=$_GET['doctor'];
   echo $dname;
    
 $query="SELECT token FROM details WHERE doctor='$dname'"  ;
 $result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);
$token=$row['token'];
if($token<30)
{
    $token=$token+1;
echo"succesfully booked <br> your token number is".$token;

$sql= "UPDATE `details` SET `token`='$token'";
mysqli_query($db,$sql);
}
else
{echo"fully booked";}

  ?>
<a href="../logout.php">logout</a><br/><br/>
<a href="home.html">profile</a><br/><br/>
</body>
      </html>
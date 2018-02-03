<html>
    <head>
        <title>Booking</title>
    </head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$i=1;
   session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location: ../index.php"); // redirects if user is not logged in
   }
$user=$_SESSION['user'];
$db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
mysqli_select_db($db,"first_db1");

// $stime=mktime(9, 00, 00, 8, 12, 2014);
// $timeunit=mktime(9, 00, 00, 8, 12, 2014);

   $dname=$_GET['doctor'];
  
 $bquery="SELECT username,doctor FROM booking WHERE username='$user'"  ;//to fetch details from user table    
 $bresult = mysqli_query($db,$bquery);
$i=0;
$u=array();
while($brow = mysqli_fetch_array($bresult))
  {
    if($brow['doctor']==$dname)
      {$dname1=$dname;}

}

/*if($brow>0)
{
$user1=$brow['username'];//to get the name of user that has alreadydone a booking
}*/

 $userquery="SELECT id FROM users WHERE username='$user'"  ;//to fetch details from user table    
 $userresult = mysqli_query($db,$userquery);
$userrow = mysqli_fetch_array($userresult);
$id=$userrow['id'];//to get the id of the user


 $detquery="SELECT hospital,token FROM details WHERE doctor='$dname'"  ;//to fetch details from details table
 $detresult = mysqli_query($db,$detquery);
$row = mysqli_fetch_array($detresult);
$token=$row['token'];//to know how many tokens have been issued
$hospital=$row['hospital'];//get the name of the hospital

if($dname1==$dname)//checking whether the booking is already done
  {echo 'you have already done this booking<br>';}
  else
  {
if($token<30)
{
    $token=$token+1;
echo"succesfully booked <br> your token number is ".$token."<br>";

// echo"reach hospital before".date("h:i:sa",$stime)."<br>";
$sql= "UPDATE details SET token='$token'WHERE doctor='$dname'";//updating the tokens taken in details table
$usql="INSERT INTO booking VALUES($user','$dname','$hospital','$token')";//adding details to booking table
mysqli_query($db,$sql);
mysqli_query($db,$usql);
}
else
{echo"fully booked";}
}
  ?>
<a href="../logout.php">logout</a><br/><br/>
<a href="home.html">profile</a><br/><br/>
</body>
      </html>
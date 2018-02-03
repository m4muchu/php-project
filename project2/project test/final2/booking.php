<html>
    <head>
        <title>Booking</title>

        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <style>

        h1{
          margin: 0px auto;
          text-align: center;
          background:pink;
          height: 250px;
          padding-top:120px;
          text-transform:uppercase;
        }


          </style>


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


 $detquery="SELECT token,hospital FROM details WHERE doctor='$dname'"  ;//to fetch details from details table
 $detresult = mysqli_query($db,$detquery);
$row = mysqli_fetch_array($detresult);
$token=$row['token'];//to know how many tokens have been issued
$hospital=$row['hospital'];//get the name of the hospital

if($dname1==$dname)//checking whether the booking is already done
  { 

    
    echo "<h1>";
    
    
    
    echo 'you have already done this booking<br>';
  
    echo "</h1>";
  }
  else
  {
if($token<30)
{
    $token=$token+1;

    echo"<h1>";
echo"succesfully booked <br> your token number is ".$token."<br>";

echo "</h1>";

// echo"reach hospital before".date("h:i:sa",$stime)."<br>";
$sql= "UPDATE details SET token='$token'WHERE doctor='$dname'";//updating the tokens taken in details table
$usql="INSERT INTO booking VALUES('$id','$user','$dname','$hospital','$token')";//adding details to booking table
mysqli_query($db,$sql);
mysqli_query($db,$usql);
}
else
{
  echo "<h1>";
  
  echo"fully booked";

  echo "</h1>";

}
}
  ?>
<a href="../logout.php">logout</a><br/><br/>
<a href="home.html">profile</a><br/><br/>
</body>
      </html>

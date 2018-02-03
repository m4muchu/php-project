<html>
    <head>
        <title>DEPARTMENTS</title>
    </head>
    </html>
<?php

  session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }

    
$user=$_SESSION['user'];
$db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
  mysqli_select_db($db,"first_db1") or die("Cannot connect to database"); //Connect to database



$result = mysqli_query($db,"SELECT * FROM booking WHERE username='$user'");
// $row = mysqli_fetch_array($result);
// $r=mysqli_num_rows($row);
// if($r>0)
if($result)
{
echo "<table border='1'>
<tr>
<th>id</th>
<th>doctor</th>
<th>hospital</th>
<th>token</th>
</tr>";
$i=1;
while($row = mysqli_fetch_array($result))
{

  
echo"<tr>";
echo "<td>" . $i . "</td>";
echo "<td>" . $row['doctor'] . "</td>";

echo "<td>" . $row['hospital'] . "</td>";
echo "<td>" . $row['token'] . "</td>";
echo"</tr>";
$i++;
}




echo "</table>";
}
else
{echo "no bookings";}
mysqli_close($db);
?>
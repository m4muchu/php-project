<html>
    <head>
        <title>Hospital</title>
    </head>
<body>
<?php
$i=1;
   session_start(); //starts the session
//    if($_SESSION['user']){ // checks if the user is logged in  
//    }
//    else{
//       header("location: ../index.php"); // redirects if user is not logged in
//    }

$db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
mysqli_select_db($db,"first_db1");


   $hname = $_GET['hospital']; //assigns user value
   echo $hname;
   
 
 $query="SELECT id,doctor FROM details WHERE hospital='$hname'"  ;
 $result = mysqli_query($db,$query);
//$exist=mysqli_num_rows($result);
?>
<?php 

   $exist = mysqli_num_rows($result);

   echo $exist;

if($exist>0)
{
echo "<table border='1'>

<tr>

<th>Id</th>

<th>doctor</th>

</tr>";


while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {echo "<tr>";

  echo "<td>". $i. "</td>";

  echo "<td> <a href='booking.php?doctor=".$row['doctor']."'>".$row['doctor']."</td>";
  
   

    echo "</tr>";
$i++;
   }
   $_SESSION['totalh'] = $i;
   echo "</table>";
 }
//  else
//  {
//   echo"no hospital found";
//   header("location:home.html");
//  }
mysqli_close($db);  
  ?>
  <a href="../logout.php">logout</a><br/><br/>
<a href="home.html">profile</a><br/><br/>
</body>
      </html>

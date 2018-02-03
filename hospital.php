<html>
    <head>
        <title>Hospital</title>
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
   $hname = $_GET['hospitalname']; //assigns user value
   echo $hname;
   
 $db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
 mysqli_select_db($db,"first_db");
 
   
 $result = mysqli_query($db,"SELECT id,doctorname FROM details WHERE hospitalname='$hname'");
$exist=mysqli_num_rows($result);
if($exist>0)
{
echo "<table border='1'>

<tr>

<th>Id</th>

<th>doctorname</th>

</tr>";


while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {echo "<tr>";

  echo "<td>". $i. "</td>";

  echo "<td> <a href='bookin.php?doctor=".$row['doctorname']."'>".$row['doctorname']."</td>";
  
   

    echo "</tr>";
$i++;
   }
   $_SESSION['totalh'] = $i;
   echo "</table>";
 }
 else{
     echo "no hospital found";
 }
mysqli_close($db);  
  ?>
  <a href="../logout.php">logout</a><br/><br/>
<a href="userhome.php">profile</a><br/><br/>
</body>
      </html>

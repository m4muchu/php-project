<html>
    <head>
        <title>Department</title>
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
 
   
 $result = mysqli_query($db,"SELECT id,doctor,hospital,department,number,email FROM details");


echo "<table border='1'>

<tr>

<th>Id</th>

<th>doctor</th>

<th>hospital</th>

<th>department</th>

<th>phone</th>

<th>email</th>

</tr>";


while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {echo "<tr>";

  echo "<td>". $i . "</td>";

      echo "<td><a href=\"booking.php?doctor=" . $row['doctor'] . "\">".$row['doctor']."</a></td>";

 echo "<td>" . $row['hospital'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";
   

    echo "</tr>";
$i++;
   }
   $_SESSION['totalh'] = $i;
   echo "</table>";
mysqli_close($db);  
  ?>
  <a href="../logout.php">logout</a><br/><br/>
<a href="userhome.php">profile</a><br/><br/>
</body>
      </html
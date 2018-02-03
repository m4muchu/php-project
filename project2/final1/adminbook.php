<html>
<head><title>Admin Registration</title></head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
 <style type="text/css">
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


</html>
<?php



  
  
 session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }


$db= mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($db,"first_db1") or die("Cannot connect to database");


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT * FROM booking");
echo "<table border='1'>
<tr>
<th>id</th>
<th>username</th>
<th>doctor</th>
<th>hospital</th>
<th>token</th>
<th>Delete</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

  
echo"<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";

echo "<td>" . $row['doctor'] . "</td>";
echo "<td>" . $row['hospital'] . "</td>";
echo "<td>" . $row['token'] . "</td>";

echo"<td><a href='admindeletebook.php?doctor=".$row['doctor']."&username=".$row['username']."'>delete</a></td>";


echo"</tr>";
?>

<?php
}



echo "</table>";

mysqli_close($db);
?>
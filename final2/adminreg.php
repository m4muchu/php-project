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
<body>

<div class=wrapper>
    <h2>Register</h2>
    <form action="adminreg.php" method="POST">
    <div id="username">
    Username: </br><input type="text" name="username" required="required" /></br>
    </div>
    <div id="username">
    Password:</br> <input type="password" name="password" reqired="reqired"/></br>
    </div>

    <div id="username">
    Email:</br> <input type="email" name="email" reqired="reqired"/></br>
    </div>
    <div id="username">
    Mobile-Number:</br> <input type="number" name="number" reqired="reqired"/></br>
    </div>

    <div id="submit">
    <input type="submit" value="Register"/>
    
</div>
    </form>

</div>    
</body>

</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

      $bool = true;
      
      $db= mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
   
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $password = mysqli_real_escape_string($db,$_POST['password']);
   $number = mysqli_real_escape_string($db,$_POST['number']);
   $email= mysqli_real_escape_string($db,$_POST['email']);
     
    


  mysqli_select_db($db,"first_db1") or die("Cannot connect to database"); //Connect to database
  $query = mysqli_query($db,"Select * from users"); //Query the users table
  while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    
    $table_users = $row['username'];
   
    if($username == $table_users )// checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert(" admin name already exist!!");</script>'; //Prompts the user
      Print '<script>window.location.assign("admin.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysqli_query($db,"INSERT INTO users (username, password, email, number,ROLE) VALUES ('$username','$password','$email','$number','ADMIN')");
    //Inserts the value to table users
    Print '<script>alert("Successfully Registered");</script>'; // Prompts the user
    Print '<script>window.location.assign("adminreg.php");</script>'; // redirects to register.php
  }
}


$db= mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($db,"first_db1") or die("Cannot connect to database");


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT * FROM users");
echo "<table border='1'>
<tr>
<th>username</th>
<th>password</th>
<th>email</th>
<th>number</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

  
echo"<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";

echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['number'] . "</td>";


echo"<td><a href='adminedit.php?id=".$row['id']."&username=".$row['username']."&password=".$row['password']."&email=".$row['email']."&number=".$row['number']."'>edit</a></td>";
echo"<td><a href='admindelete.php?id1=".$row['id']."&username=".$row['username']."'>delete</a></td>";


echo"</tr>";
?>

<?php
}



echo "</table>";

mysqli_close($db);
?>





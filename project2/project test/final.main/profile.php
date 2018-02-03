<html>
    <head>
        <title>DEPARTMENTS</title>
        <style>
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            body{
                margin: 0; 
                padding: 0; 
                
            }
            
            h1{
                text-align:center;
                margin-top:20px;
                font-size:60px;
                font-family: 'Rubuk' ,sans-serif;
            }


            ul{
                vertical-align: middle;
                background:#89bceb;
                text-align: center;
                text-decoration: none;
                list-style: none;
                padding: 30px;
                margin: 50px;
                font-family: 'Ubuntu', sans-serif;
            }

            ul li{
                  padding-top: 5px;
                  font-size: 20px;

            }

            #content{
                margin-top: 40px;
                margin-left: 40px;
                margin-right: 40px;
                background-image: url("../images/doctors");
                background-color: pink;
            }
             </style>
             <h1>YOUR BOOKING LIST</h1>
    </head>
    <body>
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

$i=1;
while($row = mysqli_fetch_array($result))
{

    echo "<div id='content'>" ; 
echo"<ul>";
echo"<li>" .$i."</li>";
echo "<li>Dr " . $row['doctor'] . "</li>";

echo "<li>HOSPITAL: " . $row['hospital'] . "</li>";
echo "<li>TOKEN :" . $row['token'] . "</li>";
echo"</ul>";
echo "</div>";
$i++;
}




echo "</table>";
}
else
{echo "no bookings";}
mysqli_close($db);
?>

</body>
</html>
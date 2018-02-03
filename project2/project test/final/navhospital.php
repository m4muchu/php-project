
 <html>
    <head>
        <title>Hospital</title>
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

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
 
   
 $result = mysqli_query($db,"SELECT id,hospital,number,email FROM details");




while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {
    echo "<div id='content'>" ; 
    echo "<ul id='ul'>";

        echo "<li id='li'>NAME      : <a href=\"hospital.php?hospital=" . $row['hospital'] . "\">".$row['hospital']."</a></li>";


        echo "<li id='li'>CONTACT   : " . $row['number'] . "</li>";

        echo "<li id='li'>EMAIL     : " . $row['email'] . "</li>";
   

    echo "</ul>";
    echo "</div>";

    $i++;
   }
   $_SESSION['totalh'] = $i;
mysqli_close($db);  
  ?>

</body>
      </html>
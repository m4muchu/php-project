
<html>
    <head>
        <title>Hospital</title>
        <h1 id="head">DEPARTMENT</h1>
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


    <style>
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
                width: 250px;
                /* margin: 0px auto; */
                margin-top: 30px;
                background: #89bceb;
                border: 1px solid white;
                border-radius: 10px;
                transition: all .2s ease-in-out;    
                float: left;
                margin-right: 130px;
                margin-left:10px;
                height: 150px;
                
            }
            a{
                color: black;
                margin-right:50px;
                font-size: 25px;
                text-decoration:none;
                text-align: center;
                text-transform: capitalize;
            }

            #content{
                margin-top: 80px;
                margin-left:100px;
            }
            ul:hover{
                transform: scale(1.1);
            }
            ul li{
                font-size: 18px;
                display: inline-block;
                list-style: none;
                width: 100%;
                font-family: 'Ubuntu', sans-serif;
                height: 40px;
                padding-left: 5px;
                padding-top: 20px;
                text-align: center;
            
            }   
            
        </style>          
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
 
   
 $result = mysqli_query($db,"SELECT DISTINCT department FROM details");


while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){

//   {echo "<tr>";

//   echo "<td>". $i . "</td>";

//       echo "<td><a href=\"department.php?department=" . $row['department'] . "\">".$row['department']."</a></td>";


//   echo "<td>" . $row['number'] . "</td>";

//   echo "<td>" . $row['email'] . "</td>";
   

//     echo "</tr>";

echo "<div id='content'>" ; 
echo "<ul>";

    echo "<li> <a href=\"department.php?department=" . $row['department'] . "\">".$row['department']."</a></li>";


    // echo "<li>CONTACT   : " . $row['number'] . "</li>";

    // echo "<li>EMAIL     : " . $row['email'] . "</li>";


echo "</ul>";
echo "</div>";




$i++;
   }
   $_SESSION['totalh'] = $i;
   echo "</table>";
mysqli_close($db);  
  ?>
  <!-- <a href="../logout.php">logout</a><br/><br/>
<a href="userhome.php">profile</a><br/><br/> -->
</body>
      </html>
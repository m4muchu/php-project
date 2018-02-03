<html>
    <head>
        <title>Department</title>
        <h1>DOCTORS</h1>
        
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <style>
            body{
                margin:0px;
                padding:0px;
        
            }

            a{
                text-decoration: none;
                text-transform: capitalize;
            }

            h1{
                text-align:center;
                margin-top:20px;
                font-size:60px;
                font-family: 'Rubuk' ,sans-serif;
                

            }
            
          
            ul{
                width: 300px;
                margin: 0px auto;
                margin-top: 50px;
                background: #89bceb;
                border: 1px solid white;
                border-radius: 10px;
                transition: all .2s ease-in-out;
                text-align: start;
                float: left;
                margin-left:60px;
                height: 300px;
            }

            #background{
                background-image: url("../images/doctors");
                background:pink;
            }

            div.content{
                margin-top: 40px;
                margin-left: 50px;
                background-color: pink;
            }
            ul:hover{
                transform: scale(1.1);
            }
            ul li{
                font-size: 17px;
                display: inline-block;
                list-style: none;
                width: 100%;
                font-family: 'Ubuntu', sans-serif;
                height: 40px;
                padding-left: 5px;
                padding-top: 20px;
                text-align: left;
            }

            #head{
                margin-left: 650px;
                margin-top:15px;

            }
        </style>

    </head>
<body>

<div id="background">
    <p>.</p>
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


while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){

//   {echo "<tr>";

//   echo "<td>". $i . "</td>";

//       echo "<td><a href=\"booking.php?doctor=" . $row['doctor'] . "\">".$row['doctor']."</a></td>";

//  echo "<td>" . $row['hospital'] . "</td>";
//   echo "<td>" . $row['department'] . "</td>";
//   echo "<td>" . $row['number'] . "</td>";

//   echo "<td>" . $row['email'] . "</td>";
   

//     echo "</tr>";


echo "<div class='content'>" ; 
echo "<ul>";

    echo "<li>NAME      :Dr <a href=\"booking.php?doctor=" . $row['doctor'] . "\">".$row['doctor']."</a></li>";


    echo "<li>HOSPITAL   : " . $row['hospital'] . "</li>";

    echo "<li>DEPARTMENT     : " . $row['department'] . "</li>";

    echo "<li>NUMBER     : " . $row['number'] . "</li>";

    echo "<li>EMAIL     : " . $row['email'] . "</li>";


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

</div>
</body>
      </html
:
<html>
    <head>
        <title>Department</title>
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
                width: 400px;
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
                text-align:center;
                
            }
            a{
                color: black;
                margin-right:50px;
                font-size: 25px;
                text-decoration:none;
                text-align: center;
                text-transform: capitalize;
            }

            #list1{
              color: black;
              
            }

            #content{
                margin-top: 100px;
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
                padding-top: 25px;
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
   $dname = $_GET['department']; //assigns user value
 
   
 $db=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
 mysqli_select_db($db,"first_db1");
 
 $query="SELECT id,doctor,hospital FROM details WHERE department='$dname'"  ;
 $result = mysqli_query($db,$query);
//$exist=mysqli_num_rows($result);
?>
<?php 
$row=mysqli_num_rows($result);


if($row>0)
{



while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {echo "<ul id='content'>";

  

  echo "<li id='list1'> <a href='booking.php?doctor=".$row['doctor']."'>".$row['doctor']."</li>";

  echo "<li id='list2'>HOSPITAL: ".$row['hospital']."</li>";
  
   

    echo "</ul>";
$i++;
   }
   $_SESSION['totalh'] = $i;
   
 }
 else
 {
  echo"no department found";
  header("location:home.html");
 }
mysqli_close($db);  
  ?>
  <!-- <a href="../logout.php">logout</a><br/><br/>
<a href="userhome.php">profile</a><br/><br/> -->
</body>
      </html
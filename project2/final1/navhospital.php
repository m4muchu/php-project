
 <html>
    <head>
        <title>Hospital</title>
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <h1>HOSPITALS</h1>
        <style>
            body{
                background:#f1f4f5;

                margin-left:30px;
            }
            ul{
                width: 300px;
                margin: 0px auto;
                margin-top: 30px;
                background: #89bceb;
                border: 1px solid white;
                border-radius: 10px;
                transition: all .2s ease-in-out;
                text-align: start;
                float: left;
                margin-right: 13px;
                margin-left:25px;
                height: 200px;
            }

            
            #background{
                background-image: url("../images/doctors");
                background:pink;
            }
            a{
                text-decoration:none;
                
                
            }

            h1{
                text-align:center;
                margin-top:20px;
                font-size:60px;
                font-family: 'Rubuk' ,sans-serif;
            }

            #content{
                margin-top: 40px;
                margin-left: 80px;
                background-image: url("../images/doctors");
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
 
   
 $result = mysqli_query($db,"SELECT DISTINCT hospital FROM details");




while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

  {
    echo "<div id='content'>" ; 
    echo "<ul>";

        echo "<li>NAME      : <a href=\"hospital.php?hospital=" . $row['hospital'] . "\">".$row['hospital']."</a></li>";
   
    echo "</ul>";
    echo "</div>";

    $i++;
   }
   $_SESSION['totalh'] = $i;
mysqli_close($db);  
  ?>
  <!-- <a href="../logout.php">logout</a><br/><br/>
<a href="userhome.php">profile</a><br/><br/> -->
<footer>
    
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
      </html>
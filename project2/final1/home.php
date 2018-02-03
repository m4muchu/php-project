<html>
    <head>
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style>
            ul li{
                font-family: 'Roboto', sans-serif;
                text-transform: uppercase;
                color: gray;
            }
        </style>
    </head>

    <body>
        <div class="continer">
             <div class="logo">
                <img id="image" src="images/logo1.png" alt=""/>
                <h1 id="medico"> Medico</h1>
            </div> 
            <div class="navbar">
            <nav>
                <ul id="list">
                   <li class="sub"><a href="#">Home</a></li>
                   <li><a href="navhospital.php">Hospitals</a></li>
                   <li><a href="navdoctor.php">Doctors</a></li>
                   <li><a href="navdepartment.php">Department</a></li>
                   <li><a href="profile.php">YOUR BOOKINGS</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </nav>
            </div>
        </div>
        <div class="main">
        
        </div>
        <div class="grid">
            <div class="grid-1">
                <div class="grid-1-head">
                <h2>Search by</h3>
                <h1 id="visit">Hospital</h2>
                </div>
                <div class="input">
                        <form action="hospitalsearch.php" method="POST">
                                <input type="text" name="hospitalname" placeholder="Hospital Name">
                                <input class="submit"type="submit" value="Search" name="appoinment">
                            </form>
                </div>
            </div>
            <div class="grid-2">
                 <div class="grid-1-head">
                <h2>search by</h3>
                <h1 id="visit">Doctor</h2>
                </div>
                <div class="input">
                    <form action="doctorsearch.php" method="POST">
                        <input type="text" name="doctorname" placeholder="Doctor Name">
                        <input class="submit"type="submit" value="Search" name="appoinment">
                    </form>
                </div>
            </div>
            <div class="grid-3">
                 <div class="grid-1-head">
                <h2>search by</h3>
                <h1 id="visit">Department</h2>
                </div>
                <div class="input">
                    <form action="departmentsearch.php" method="POST">
                        <input type="text" name="department" placeholder="Department">
                        <input class="submit"type="submit" value="Search" name="appoinment">
                    </form>
                </div>
            </div>
            
            </div>
            
    </body>
    <?php
     session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }?>
</html>
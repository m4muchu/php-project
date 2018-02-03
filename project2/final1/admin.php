<html>
<body>
	<ul>
		<li><a href=adminreg.php>Create & Edit ADMIN</a></li>
	    
		<li><a href=add.php>Add Details</a></li>
		<li><a href=adminbook.php>Delete booking</a></li>
	    
	</ul>
</body>
<?php
 session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
       header("location:index.php"); // redirects if user is not logged in
   }
   ?>
</html>
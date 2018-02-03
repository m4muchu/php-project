<html>
    <head>
        <title>Medico</title>
        <link href="css/login.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        
        <div id="major">
            
            <div id="left">
                <h1 id="heading">New here?</h1>
                <h3 id="caption">Sign up and be fit always<h3>
                    <form action="register.html" method="POST">
                    <input type="submit" id="register" name="Register" value="SIGN UP">
                    </form>
                    
            </div>      
            <div id="right">
    <div id="right1">
        <div>
            <form action="checklogin.php" method="POST" id="newForm">
                <h1 id="head">Welcome back,</h1>
                <br/> <input type="text" name="username" class="input" required="required" placeholder="NAME"/> <br/>
                <br/><input type="password" name="password" class="input" required="required" placeholder="PASSWORD"/> <br/>
                <input type="submit" class="submit" value="Login" id="submitBtn"/>
        
            </div>
    </div>
</div>

<!-- <h2>Login Page</h2>
<a href="index.php">Click here to go back<br/></a><br/>
-->
</div>     
</body>
</html>
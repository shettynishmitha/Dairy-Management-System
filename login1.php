<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar1.png" class="avatar">
        <h1>Login Here</h1>
        <form method ="post" action = "login1.php">
		    <label>Select User Type:</label><br>
                <select name="usertype">
                     <option value="A">Admin</option>
                     <option value="U">User</option>
				</select><br>
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="" value="Login"><br>
            <a href="register.html">Don't have an account?</a>
        </form>
        
    </div>
</body>
</head>
</html>
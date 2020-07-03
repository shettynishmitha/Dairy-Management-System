<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <img src="avatar1.png" class="avatar">
</head>
<body>
  <div class="header">
      <img src="avatar1.png" class="avatar">
  	<h2><b>Login</b></h2>
  </div> 
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
 
  	<div class="input-group">
  		<label>UserID</label>
  		<input type="text" name="userid" value="<?php echo $userid; ?>">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>

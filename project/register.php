<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav>
    <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="HS.html">HOME</a></li>
         </ul>

        <div class="logo">
          <img src="logo.jpg" width="250" height="103">
    </div>
    <div class="hore-text">
      <h1>MWONGORI HIGH SCHOOL</h1>      
    </div>
  </div>  
    </nav>
</body>
<body style="padding-top: 80px">
	<div class="header">
		<h2>Register</h2>		
	</div>
	<form method="POST" action="register.php">
		<!--display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>	
			<input type="text" name="username" value="<?php echo $username; ?>">	
		</div>
		<div class="input-group">
			<label>Email</label>	
			<input type="text" name="email" value="<?php echo $email; ?>">	
		</div>
		<div class="input-group">
			<label>Password</label>	
			<input type="password" name="password_1">	
		</div>
		<div class="input-group">
			<label>Confirm Password</label>	
			<input type="password" name="password_2">	
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member?<a href="Login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
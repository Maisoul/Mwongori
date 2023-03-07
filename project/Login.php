<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav>
    <div class="topnav" id="myTopnav">
    <ul>
    	<li><a class="active" href="idex.php">REGISTER</a></li>
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
<body style="padding-top: 100px">
	<div class="header">
		<h2>Login</h2>		
	</div>
	<form method="POST" action="Login.php">
		<!--display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>	
			<input type="text" name="username">	
		</div>
		<div class="input-group">
			<label>Password</label>	
			<input type="password" name="password">	
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
<div class="footer">    
 <p>Privacy policy,About us</p>
 <p>&nbsp;</p>
<style>
.fa {
  padding: 40px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: -10px 0px;
}

.fa:hover {
    opacity: 0.1;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
</style>
<body>
<!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
</body>
</div>

</html>
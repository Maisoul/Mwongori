<?php include('server.php'); 

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
	header('location: Login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>System</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
	<div class="header">
		<h2 style="font-size: 50px">Clubs & Societies</h2>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<?php if (isset($_SESSION['username'])): ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
			<p>Feel free to fill the  <a href="Reg.html"><font size="5">REGISTER</font></a>  form</p> 
		<p>&nbsp;</p>
		<a href="HS.html"><font size="6">HOME</font></a>
		<p>&nbsp;</p>
		<p><a href="idex.php?Logout='1'" style="color: red; font-weight: bold; font-size: 50px;">Logout</a></p>
	<?php endif ?>
	</div>
</body>
</html>
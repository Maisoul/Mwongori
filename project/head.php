<?php include('servex.php'); 

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
	header('location: hedex.php');
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
			<li><a href="show.php"><font size="5">REGISTERED</font></a></li>
			<li><a href="retrive.php"><font size="5">FEES</font></a></li>
			<li> <a href="view.php"><font size="5">Club/Societies</font></a></li> 
		<p>&nbsp;</p>
		<a href="HS.html"><font size="6">HOME</font></a>
		<p>&nbsp;</p>
		<p><a href="head.php?Logout='1'" style="color: red; font-weight: bold; font-size: 50px;">Logout</a></p>
	<?php endif ?>
	</div>
</body>
</html>
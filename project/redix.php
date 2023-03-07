<?php include('sever.php'); 

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
	header('location: Log.php');
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
		<h2 style="font-size: 50px">Fees Payment</h2>
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
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p>&nbsp;</p>
		<p>Fill the  <a href="FeeStatement.html"><font size="5">FEES</font></a> payment form</p>
		<p>&nbsp;</p>
		 <a href="HS.html"><font size="6">HOME</font></a> 
		 <p>&nbsp;</p>
		<p><a href="redix.php?Logout='1'" style="color: red; font-size: 50px; font-weight: bold;">Logout</a></p>
	<?php endif ?>
	</div>
</body>
</html>
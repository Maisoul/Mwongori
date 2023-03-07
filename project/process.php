<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'davidmaiso', 'mwongori') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$username = '';
$email = '';
$password = '';

if (isset($_POST['SAVE'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    //encrypt password before storeing in database (security)
	$password = md5($_POST['password']); //encrypt password before storeing in database (security)

	$mysqli -> query("INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')") or die($mysqli -> error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: show.php");
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli ->query("DELETE FROM user WHERE id='$id'") or die($mysqli ->error());
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "warning";
	header("location: show.php");

}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli -> query("SELECT * FROM user WHERE id='$id'") or die($mysqli ->error());

	if (count($result) ==1) {
		$password = md5($password);//encrypt password before storeing in database (security)
		$row = $result ->fetch_array();
		$username = $row['username'];
		$email = $row['email'];
		$password = $row['password'];
	}
}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);//encrypt password before storeing in database (security)

	$mysqli -> query("UPDATE user SET username='$username', email='$email', password='$password' WHERE id='$id'") or die($mysqli ->error);

	$_SESSION['message'] = "Record has been update!";
	$_SESSION['msg_type'] = "warning";
	header("location: show.php");
}

?>
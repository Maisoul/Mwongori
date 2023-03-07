<?php
 $Firstname = filter_input(INPUT_POST, 'Firstname');
 $Surname = filter_input(INPUT_POST, 'Surname');
 $Lastname = filter_input(INPUT_POST, 'Lastname');
 $StudentID = filter_input(INPUT_POST, 'StudentID');
 $Birthday = filter_input(INPUT_POST,'Birthday');
 $Gender = filter_input(INPUT_POST, 'Gender');
 $email = filter_input(INPUT_POST, 'email');
 $Indoors = filter_input(INPUT_POST, 'Indoors');
 $Outdoors = filter_input(INPUT_POST, 'Outdoors');
 $Science = filter_input(INPUT_POST, 'Science');
 $General = filter_input(INPUT_POST, 'General');
 $Societies = filter_input(INPUT_POST, 'Societies');
 $Comments = filter_input(INPUT_POST, 'Comments');

 	if (!empty($Firstname) || !empty($Surname) || !empty($Lastname) || !empty($StudentID) || !empty($Birthday) || !empty($Gender) || !empty($email)|| !empty($Indoors) || !empty($Outdoors) || !empty($Science) || !empty($General) || !empty($Societies) || !empty($Comment)) {
 	 	$servername = "localhost";
 	 	$dbUsername = "root";
 	$dbPassword = "davidmaiso";
 	$dbname = "mwongori";


 	//create connection
 	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

 	$dup = mysqli_query($conn, "Select * From register where StudentID= '$StudentID' ");
if (mysqli_num_rows($dup)>0) {
	echo "Already Registered!";

	header('location: view.php');
} else{

 	if (mysqli_connect_error()) {
 		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
 	 } 
 	 else{
 	 	$sql = "INSERT INTO register (Firstname, Surname, Lastname, StudentID, Birthday, Gender, email, Indoors, Outdoors, Science, General, Societies, Comments) VALUES('$Firstname', '$Surname', '$Lastname', '$StudentID', '$Birthday', '$Gender', '$email', '$Indoors', '$Outdoors', '$Science', '$General', '$Societies', '$Comments')";
 	 	
 	 		if ($conn ->  query($sql)) {
 			echo "New record added successfully!";
 			
 			header('location: view.php');
 		}
 		else {
 			echo "Error: ". $sql . "<br>". $conn -> error;
 		}
 		$conn -> close();
 	}
 }
}
?>
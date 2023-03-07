<?php
 $Studentname = filter_input(INPUT_POST, 'Studentname');
 $StudentID = filter_input(INPUT_POST, 'StudentID');
 $telNo = filter_input(INPUT_POST, 'telNo');
 $email = filter_input(INPUT_POST, 'email');
 $Tuitionfee = filter_input(INPUT_POST,'Tuitionfee');
 $Library = filter_input(INPUT_POST, 'Library');
 $Activity = filter_input(INPUT_POST, 'Activity');
 $cautionmoney = filter_input(INPUT_POST, 'cautionmoney');
 $otherexpenses = filter_input(INPUT_POST, 'otherexpenses');
 $total = filter_input(INPUT_POST, 'total');

 if (!empty($Studentname) || !empty($StudentID) || !empty($telNo) || !empty($email) || !empty($Tuitionfee) || !empty($Library) || !empty($Activity) || !empty($cautionmoney) || !empty($otherexpenses) || !empty($total)) {
 	$servername = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "davidmaiso";
 	$dbname = "mwongori";
 	
 	//create connection
 	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

 	$dup = mysqli_query($conn, "Select * From fees where StudentID= '$StudentID' ");
if (mysqli_num_rows($dup)>0) {
	echo "Already Registered!";
} else{

 	if (mysqli_connect_error()) {
 		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
 	}
 	 else {
 		$sql = "INSERT INTO fees (Studentname, StudentID, telNo, email, Tuitionfee, Library, Activity, cautionmoney, otherexpenses, total) VALUES ('$Studentname', '$StudentID', '$telNo', '$email', '$Tuitionfee', '$Library', '$Activity', '$cautionmoney', '$otherexpenses', '$total')";
 		if ($conn ->  query($sql)) {
 			echo "New record added successfully!";
 		}
 		else {
 			echo "Error: ". $sql . "<br>". $conn -> error;
 		}
 		$conn -> close();
 	}
 }
} 

?>
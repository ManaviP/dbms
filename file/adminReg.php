<?php
if(isset($_POST['aregister'])){
	require 'connection.php';
	$aname=$_POST['aname'];
	$aemail=$_POST['aemail'];
	$apassword=$_POST['apassword'];
	$aphone=$_POST['aphone'];
	$acity=$_POST['acity'];
    $check_email = mysqli_query($conn, "SELECT aemail FROM admins where aemail = '$aemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO admins (aname, aemail, apassword, aphone, acity)
	VALUES ('$aname','$aemail', '$apassword', '$aphone', '$acity')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:../login.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>
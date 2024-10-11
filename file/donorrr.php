<?php
require 'connection.php';
if(isset($_POST['dregister'])){
	$dname=$_POST['dname'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$bodyw=$_POST['bodyw'];
    $demail=$_POST['demail'];
    $rbg=$_POST['rbg'];
	$check_email = mysqli_query($conn, "SELECT demail FROM donors where demail = '$demail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../donor11.php?error=".$error );
}else{
	$sql = "INSERT INTO donors (dname, dob, gender, bodyw, demail,rbg)
	VALUES ('$dname', '$dob', '$gender', '$bodyw','$demail','$rbg')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'You have successfully registered. Please.';
		header( "location:../userpage.php?msg=".$msg );
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../donor11.php?error=".$error );
	}
	$conn->close();
}
}
?>
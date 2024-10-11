
<?php
require 'connection.php';
if(isset($_POST['cregister'])){
	$cname=$_POST['cname'];
	$cemail=$_POST['cemail'];
	$oname=$_POST['oname'];
	$cdate=$_POST['cdate'];
	$ctime=$_POST['ctime'];
    $clocation=$_POST['clocation'];
	$check_email = mysqli_query($conn, "SELECT cemail FROM campaigns where cemail = '$cemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../campaign11.php?error=".$error );
}else{
	$sql = "INSERT INTO campaigns (cname, cemail, oname, cdate, ctime,clocation)
	VALUES ('$cname','$cemail', '$oname', '$cdate', '$ctime','$clocation')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'You have successfully registered. Please.';
		header( "location:../campaign11.php?msg=".$msg );
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../campaign11.php?error=".$error );
	}
	$conn->close();
}
}
?>
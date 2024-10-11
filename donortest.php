<?php 
require 'file/connection.php'; 
session_start();
 $sql="Select * from donors";
    $result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html>
<?php $title="Bloodbank | donors"; ?>
<?php require 'head.php'; ?>
<style>
    body{
    background: url(image/p2.png) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'header.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr><th colspan="9" class="title">Donors</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date of birth</th>
			<th>Body weight</th>
			<th>Gender</th>
			<th>Blood group</th>
			
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">no campaign</b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['dname'];?></td>
			<td><?php echo $row['demail'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['bodyw'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['rbg'];?></td>
			
		</tr>

        
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php ?>
<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['campaigns']))
  {
  header('location:login.php');
  }
  else{
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | campaign"; ?>
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
		<tr><th colspan="9" class="title">campaign</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>organisation name</th>
			<th>location</th>
			<th>date</th>
			<th>time</th>
			
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
			<td><?php echo $row['cname'];?></td>
			<td><?php echo $row['cemail'];?></td>
			<td><?php echo $row['oname'];?></td>
			<td><?php echo $row['clocation'];?></td>
			<td><?php echo $row['cdate'];?></td>
			<td><?php echo $row['ctime'];?></td>
			
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>
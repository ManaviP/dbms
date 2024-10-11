<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body{
    background: url(jastimage/bb1.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 530px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
</head>
<?php $title="create campaign"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#campaign">Campaign</a>
              </li>
            </ul>
    <div class="tab-content">

      <div class="tab-pane container active" id="campaign">

          <form action="file/campaigncrea.php" method="post" enctype="multipart/form-data">
            <input type="text" name="cname" placeholder="campaign Name" class="form-control mb-3" required>
            <input type="text" name="oname" placeholder="organisation name" class="form-control mb-3" required>
            <input type="date" name="cdate" placeholder="campaign date" class="form-control mb-3">
            <input type="time" name="ctime" placeholder="campaign time" class="form-control mb-3" required>
            <input type="text" name="clocation" placeholder="campaign location" class="form-control mb-3" >
            <input type="email" name="cemail" placeholder="Email" class="form-control mb-3" >
            <input type="submit" name="cregister" value="register" class="btn btn-primary btn-block mb-4">
          </form>
       </div>
     </div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>
<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
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
                <a class="nav-link active" data-toggle="tab" href="#donorreg">donor registration</a>
              </li>
            </ul>
    <div class="tab-content">

      <div class="tab-pane container active" id="donorreg">

          <form action="file/donorrr.php" method="post" enctype="multipart/form-data">
            <input type="text" name="dname" placeholder="donor Name" class="form-control mb-3" required>
            <input type="date" name="dob" placeholder="date of birth" class="form-control mb-3" required>
            <select name="gender" class="form-control mb-3" required>
                <option disabled="" selected="">gender</option>
                <option value="female">female</option>
                <option value="male">male</option>
          </select>
            <input type="text" name="bodyw" placeholder="body weight" class="form-control mb-3" required>
            <input type="email" name="demail" placeholder="Email" class="form-control mb-3" >
            <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="submit" name="dregister" value="register" class="btn btn-primary btn-block mb-4">
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
<?php
session_start();
    require 'connection.php';
    if(isset($_POST['alogin'])){
    $aemail=$_POST['aemail'];
    $apassword=$_POST['apassword'];
    $sql="select * from admins where aemail='$aemail' and apassword='$apassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['aemail']=$row['aemail'];
        $_SESSION['aname']=$row['aname'];
        $_SESSION['aid']=$row['id'];
        $msg= $_SESSION['aname'].' have logged in.';
        header( "location:../adminpage1.php?msg=".$msg);
    } 
  }
?>
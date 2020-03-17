<?php
include("server.php");

$id = $_SESSION['ID'];
$db = mysqli_connect('localhost', 'root', '', 'ccfs');

if (isset($_POST['savePasswd'])) {
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $passwordHashed = password_hash($password, PASSWORD_BCRYPT); //hash the password
  $updateQuery = "UPDATE accounts SET password='$passwordHashed' WHERE accid='$id'";

  if(mysqli_query($db, $updateQuery)) {
    $_POST = array();

    if($_SESSION['TYPE']=='PRINCIPAL'){
      header('location: Principal/PrincipalHome.php');
    }elseif($_SESSION['TYPE']=='REGISTRAR'){
      header('location: Registrar/RegistrarHome.php');
    }elseif($_SESSION['TYPE']=='ACCOUNTING'){
      header('location: Accounting/AccountingHome.php');
    }else{
      header('location: Teacher/TeacherHome.php');
    }
  }
}

 ?>

<?php
session_start();

// initializing variables
$username = "";
$errors = array();

//connect to the database
try {
  $db = new PDO('mysql:host=localhost;dbname=ccfs', 'root', '');
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $query = "SELECT * FROM accounts WHERE username=:username AND accstatus='active'";
    $stmt = $db->prepare($query);
    //Bind the username value.
    $stmt->bindValue(':username', $username);
    //Execute the statement.
    $stmt->execute();
    //Fetch the table row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

  	$_SESSION['TYPE'] = $user['type'];

    if($user !== false) {
      //Compare password attempt with the password stored in the database.
      $validPassword = password_verify($password, $user['password']);
      if($validPassword || $password == $user['password']) {
        $_SESSION['ID'] = $user['accid'];
        $_SESSION['USERNAME'] = $user['username'];
        $_SESSION['PASSWORD'] = $user['password']; //if ccfs2020 then prompt change password
        $_SESSION['LOGIN'] = true;
      } else {
      	array_push($errors, "Wrong credentials or account inactive.");
      }
    } else {
      array_push($errors, "Username does not exist.");
    }

  }
}
?>

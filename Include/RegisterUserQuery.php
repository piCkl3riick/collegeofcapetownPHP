<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'sign in');
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $username = $mysqli->real_escape_string($_POST['username']);
  $password = $mysqli->real_escape_string($_POST['password']);
            $_SESSION['username'] = $username;
    $sql = "INSERT INTO users (username, password)"
    ." VALUES ('$username', '$password')";
          //if the querry is successful, redirect to welcome page, done.
    if ($mysqli->query($sql) === true) {
      $_SESSION['message'] = 'Registration successful. added $Username to the database';
      header("location: Home index.html");
    }
    else{
      $_SESSION['message'] = "User could not be added to the database!";
    }
}
?>
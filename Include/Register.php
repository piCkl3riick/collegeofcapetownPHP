<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'Register');
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $firstname = $mysqli->real_escape_string($_POST['firstname']);
    $lastname = $mysqli->real_escape_string($_POST['lastname']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $_SESSION['firstname'] = $firstname;
    $sql = "INSERT INTO users (firstname, lastname, phone, email) "
    ." VALUES ('$firstname', '$lastname', '$phone', '$email')";
          //if the querry is successful, redirect to welcome page, donr.
    if ($mysqli->query($sql) === true) {
      $_SESSION['message'] = 'Registration successful. added $firstname to the database';
      header("location: Login.php");
    }
    else{
      $_SESSION['message'] = "User could not be added to the database!";
    }
}
?>
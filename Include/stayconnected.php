<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'stayconnected');
if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $Keepusername = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $message = $mysqli->real_escape_string($_POST['message']);

    
            $_SESSION['username'] = $Keepusername;
    $sql = "INSERT INTO users (username, email, message) "
    ." VALUES ('$Keepusername', '$Keepemail', '$message')";


          //if the querry is successful, redirect to welcome page, donr.

    if ($mysqli->query($sql) === true) {
      $_SESSION['message'] = 'Registration successful. added $Keepusername to the database';
      header("location: Home index.html");
    }
    else{
      $_SESSION['message'] = "User could not be added to the database!";
    }
}

?>
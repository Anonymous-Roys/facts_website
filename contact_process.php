<?php
require_once("dbconn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
     $message =$_POST['message']; 

    $query = "INSERT INTO contact (username, email, message) VALUES('$username', '$email', '$message')";
    $results = mysqli_query($conn, $query);
    if ($results){
        header("Location:dashboard.php");
    }

    header("Location: dashboard.php");
    exit();
   
}
?>
<?php
require_once("dbconn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
     $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // You should hash the password before storing it in the database

    $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";
    $results = mysqli_query($conn, $query);
    if ($results){
        header("Location:dashboard.php");
    }

    header("Location: login.php");
    exit();
   
}
?>

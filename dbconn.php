<?php

$conn = mysqli_connect('localhost', 'root', '', 'facts');
if (!$conn){
    die("Error connecting to") . mysqli_connect_error();
}

?>
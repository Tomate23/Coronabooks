<?php
    include_once 'dbh2.inc.php';

    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $name = $_POST['uname'];
    

    $sql = "INSERT INTO users (email,pass,userName) VALUES ('$email','$pass','$name')";
    mysqli_query($conn2, $sql);
    header("location: ../index2.php?=successSignUp");
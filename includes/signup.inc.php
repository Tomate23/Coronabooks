<?php
session_start();
include '../conexion2.php';
    $name = $_POST['uname'];
    $pass = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE userName='$name' AND pass='$pass';";
    $result = mysqli_query($con2,$sql);
    // $resultCheck = mysqli_num_rows($result);
    // if ($resultCheck > 0) {
    //     echo "Usuario validado correctamente";
    // } 
    
    $_SESSION['Usuario']=mysqli_fetch_array($result);
    if (isset($_SESSION['Usuario'])) {
        header("Location: ../admin.php");
    }else {
        header("Location: ../redirec/login.php?error=datos no validos");
    }
?>















    //$resultCheck = mysqli_num_rows($result);
    // if ($resultCheck > 0){
    //     echo "Usuario validado correctamente";
    // } else{
    //     echo "Usuario o contraseña incorrectos";
    // }
    
    // header("location: ../login.php?=successLogin");

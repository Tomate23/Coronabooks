<?php
    session_start();
    unset($_SESSION['Usuario']);
    header("Location: ../index2.php")
?>
<?php
    include("src/security.php");
    security_addNewUser();
    header('Location: login.php');
    exit;
?>
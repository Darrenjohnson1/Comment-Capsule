<?php
    include("src/security.php");
    security_login();
    header('Location: login.php');
    exit;
?>
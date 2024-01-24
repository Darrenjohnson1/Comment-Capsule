<?php 
    include("src/security.php");
    security_logout();
    header('Location: index.php');
    exit;
?>
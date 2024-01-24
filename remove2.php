<?php
    include("src/security.php");
    security_deleteUser();
    header('Location: index.php');
    exit;
?>
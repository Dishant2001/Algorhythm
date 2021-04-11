<?php
session_start();
unset($_SESSION['User']);
unset($_SESSION['id']);
header('location:index.php');
?>
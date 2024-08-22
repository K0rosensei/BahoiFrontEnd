<?php 
session_start();
// mengecek admin login atau tidak
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $username = $_SESSION['username'];
    // var_dump($_SESSION['token']);
    return false;
}
?>
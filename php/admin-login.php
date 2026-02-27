<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin123"){
    $_SESSION['admin'] = $username;
    header("Location: admin-dashboard.php");
}else{
    echo "Invalid Login";
}
?>
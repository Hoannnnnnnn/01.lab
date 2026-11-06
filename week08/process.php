<?php
session_start();

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';
$token = $_POST['token'] ?? '';

if ($user === 'Hoan' && $pass === '106638368') {
    $_SESSION['user'] = $user;
    $_SESSION['token'] = $token; 
    
    header("Location: welcome.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
<?php
session_start();
require('dbinfo.php');
$email = $_SESSION['emailid'];
$username = $_SESSION['username'];
$subject = $_SESSION['subject'];
$message = $_SESSION['message'];

error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

$res = mail("$email", "$subject" , "$message");
var_export( $res );
header("Location: login.php");
//session_unset();
//session_destroy();
$_SESSION['id'] = "checkmail";
//$_SESSION['ids'] = "forgotpwd";
?>
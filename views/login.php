<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "mea";
$database = "startupdev";

$connect = mysql_connect($server, $user, $pass);

if (!$connect)
	throw new Exception("error connect", 500);
$select_base = mysql_select_db($database, $connect);
if (!$select_base)
	throw new Exception("error db", 500);

$data = mysql_query("SELECT * FROM users WHERE username = " . $_POST['username']) . " AND password = " . $_POST['password'] . ";";
if ($data) {
	$_SESSION['username'] = $_POST['username'];
	return header('location: success.php');
} else {
	return header('location: fail.php');
}

?>
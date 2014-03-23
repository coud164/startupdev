<?php
include_once("id.php");

$connect = mysql_connect($server, $user, $mdp);

if (!$connect)
	throw new Exception("INTERNAL ERROR", 500);
$select_base = mysql_select_db($base, $connect);
if (!$select_base)
	throw new Exception("INTERNAL ERROR", 500);

public function checkId($_POST) {
	$data = mysql_query("SELECT * FROM users WHERE username = " . $_POST['username']) . " AND password = " . $_POST['password'] ";";
	if ($data) {
		return $data;
	} else {
		return false;
	}
}
?>
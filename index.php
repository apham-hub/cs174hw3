<?php

session_start();
require_once("./config/config.php");

$default_ctrl = "main";

if(array_key_exists("c", $_REQUEST))
{
	$controller = strtolower($_REQUEST["c"]);
}
else
{
	$controller = $default_ctrl;
}

function main()
{
	require_once("./controllers/main.php");
	mainController();
	displayView($_SESSION['views']);
}

?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8" />
<meta name="description" content="Looney Limericks poem scheme" />
<meta name="ROBOTS" content="NO INDEX" />
<title>Looney Limericks</title>
<h1>Looney Limericks</h1>
<body>

<form action="script.php" method="post">
Name: <input type="text" name="name"><br/>
Password: <input type="password" name="password"><br/>
<input type="submit" value="Submit">
</form><br>

</body>
</html>

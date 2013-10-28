<?php

session_start();
require_once("./config/config.php");

?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="ROBOTS" content="NO INDEX">
<title>Looney Limericks</title>
<h1>Looney Limericks</h1>

<?php

$default_ctrl = "main";
$default_view = "notloggedin";
$default_entry = "mostrecent";

if(array_key_exists("c", $_REQUEST))
{
	$controller = strtolower($_REQUEST["c"]);
}
else
{
	$controller = $default_ctrl;
}

if(array_key_exists("view", $_REQUEST))
{
	$view = strtolower($_REQUEST["view"]);
}
else
{
	$view = $default_view;
}

if(array_key_exists("e", $_REQUEST))
{
	$entry = strtolower($_REQUEST["e"]);
}
else
{
	$entry = $default_entry;
}

require_once("./controllers/main.php");
require_once("./controllers/login.php");
require_once("./controllers/blog.php");

?>
</head>

<body>

<form action="script.php" method="post">
Name: <input type="text" name="name"><br/>
Password: <input type="password" name="password"><br/>
<input type="submit" value="Submit">
</form><br>

</body>
</html>

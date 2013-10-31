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
}

?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8" />
<meta name="description" content="Looney Limericks poem scheme" />
<meta name="ROBOTS" content="NO INDEX, NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>css/styles.css" />
<link rel="shortcut icon" href="limerick.ico" />
<title>Looney Limericks</title>
<body>
	<?php
		require_once("./views/display.php");
	?>

</body>
</html>

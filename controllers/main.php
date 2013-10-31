<?php

require_once("views/display.php");
require_once("views/submitPoem.php");
require_once("models/database.php");

class mainController extends basecontroller
{
  function __contruct()
  {

  }

  function mainEntry()
  {
     switch($_REQUEST['action'])
     {
        case submit:
           $data = new database();
           $mostrecent = $data->getMostRecent();
           $bestrated = $data->getBestRated();
           $view = new submitPoem();
     }
  }

}
?>

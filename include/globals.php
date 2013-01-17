<?php
require_once("functions.php");

session_start();

// database
if (!isset($_SESSION["db"])) { $_SESSION["db"] = defaultdb(); }

// array of classes
if (!isset($_SESSION["classes"])) {
  $_SESSION["classes"] = get_classes($_SESSION["db"]);
}

// this class, if necessary
if (!isset($_GET["class"]) and isset($_GET["class"])) {
  $_SESSION["classid"] = $_GET["class"]; 
}
  

?>

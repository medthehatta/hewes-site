<?php
require_once("functions.php");

echo "Starting session...\n";
session_start();

// database
echo "Setting database...\n";
if (!isset($_SESSION["db"])) { $_SESSION["db"] = defaultdb(); }

// array of classes
echo "Setting classes...\n";
if (!isset($_SESSION["classes"])) {
  $_SESSION["classes"] = get_classes($_SESSION["db"]);
}

// this class, if necessary
echo "Setting current class...\n";
if (!isset($_GET["class"]) and isset($_GET["class"])) {
  $_SESSION["classid"] = $_GET["class"]; 
}
  
echo var_dump($_SESSION);

?>

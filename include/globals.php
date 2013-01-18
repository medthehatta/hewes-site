<?php
require_once("functions.php");

// start a session, if needed
if (session_id()=='') {
  session_start();
}

// database
if (!isset($_SESSION["db"])) { $_SESSION["db"] = defaultdb(); }

// array of classes
if (!isset($_SESSION["classes"])) {
  $_SESSION["classes"] = get_classes($_SESSION["db"]);
}

// this class, if necessary
if (isset($_GET["class"])) {
  $_SESSION["classid"] = $_GET["class"];
}

// shortcuts
$classes = $_SESSION["classes"];
$classid = $_SESSION["classid"];
if ($classid) {
  $classname = $classes[$classid]["name"];
} else {
  $classname = "";
}
?>

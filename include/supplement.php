<?php
require_once("globals.php");
if ($classes[$classid]["supplemental"]) {
  echo "\n\n<!-- SUPPLEMENTAL READ FROM: ".$classes[$classid]["supplemental"]." --!>\n";
  include($classes[$classid]["supplemental"]);
  echo "\n<!-- /SUPPLEMENTAL --!>\n\n";
}
?>

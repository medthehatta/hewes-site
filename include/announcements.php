<?php
require_once("globals.php");
$entries = get_announcements($_SESSION["db"],$classid);
if ($entries) {
?>
<div id="announcements_bar">
<?php
  foreach ($entries as $entry) {
    echo $entry."<br/>\n";
  }
?>
</div><!--/announcements_bar--!>
<?php
} //end if
?>


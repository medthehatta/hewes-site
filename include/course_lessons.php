<?php

require_once("globals.php");

$entries = get_lesson_entries($_SESSION["db"],$classid);
if ($entries) {
?>
<h1>Homework and Lessons:</h1>
<table border="1">
<tr>
<th>Standard(s)</th>
<th>Topic</th>
<th>Homework</th>
<th>Date Due</th>
<?php
  foreach ($entries as $entry) {
    echo "<tr><td>$entry[0]</td> <td>$entry[1]</td> <td>$entry[2]</td> <td>$entry[3]</td></tr>\n";
  }
?>
</tr>
</table>
<?php
} //end if
?>

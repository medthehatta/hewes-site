<div id="header">

<!--TITLE--!> 
<h1><?php echo $classes[$classid]["name"]; ?></h1>

<!--COURSE NAV MENU--!>
<div id="course_menu" class="menu">
<ul>
<?php 
foreach ($classes as $c) { 
  if ($classes[$classid]["nav"]==$c["nav"]) { 
    echo "<li><a href='".$c["link"]."'>".$c["nav"]."</a></li>";
  } else {
    echo "<li><b><a href='".$c["link"]."'>".$c["nav"]."</a></b></li>";
  }
}
?>
</ul>
</div> <!--/course_menu--!>
</div> <!--/header--!>


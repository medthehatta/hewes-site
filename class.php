<!doctype html>
<?php include("include/globals.php"); ?>
<html>
<head>
<title><?php echo $classname . " - Matt Hewes Teaching"; ?></title>
<link rel="stylesheet" href="hewes1.css"/>
</head>

<body>
<div id="container">
<div id="header">
<h1><?php echo $classname; ?></h1>
</div>
<?php include("include/course_menu.php"); ?>
<?php include("include/announcements.php"); ?>

<div id="content">
<?php include("include/course_requirements.php"); ?>
<?php include("include/supplement.php"); ?>
<?php include("include/course_lessons.php"); ?>
</div><!--/content--!>

<?php include("include/footer.php"); ?>
</div><!--/container--!>
</body>
</html>

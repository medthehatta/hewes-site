<!doctype html>
<?php include($_SERVER['DOCUMENT_ROOT']."/include/globals.php"); ?>
<html>
<head>
<title><?php echo $classname . " - Matt Hewes Teaching"; ?></title>
<link rel="stylesheet" href="/css/hewes1.css"/>
</head>

<body>
<div id="container">
<div id="header">
<h1><?php echo $classname; ?></h1>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/include/course_menu.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/include/announcements.php"); ?>

<div id="content">
<?php include($_SERVER['DOCUMENT_ROOT']."/include/course_requirements.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/include/supplement.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/include/course_lessons.php"); ?>
</div><!--/content--!>

<?php include($_SERVER['DOCUMENT_ROOT']."/include/footer.php"); ?>
</div><!--/container--!>
</body>
</html>

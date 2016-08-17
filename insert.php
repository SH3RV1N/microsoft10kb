<html>
<?php
include "config.php";
if(isset($_POST["submit"]))
{
	$title = htmlentities($_POST["titleField"]);
	$link = htmlentities($_POST["titleLink"]);
	
	$sql = "INSERT INTO `db`.`documents` (`title`, `link`) VALUES ('".$title."', '".$link."'); ";
	mysql_query($sql);
}
?>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<head>
<title>10kb</title>
</head>
<body>
<center>
<div id="if-menu">
<a href="goo.gl/WmCvhO">About Challenge</a>	
<a href="goo.gl/THdDDT">Microsoft</a>
</div><br><br><br>
<div id="top-header-image"></div>
<div id="main" dir="ltr">
	<div id="top-header">
		<a href="index.php">Logout</a>
	</div><br>
	
<div id="body-menu-center">
<br><br><br><br><form action="" method="post" name="submitForm">
	Document Title: <input type="text" name="titleField"/><br><br>
	Document Link: <input type="text" name="titleLink"/><br><br>
	<input type="submit" value="Submit" name="submit"/>
</form>
</div>

</div>
<div id="footer">
	<ul><b><i>Linkes</i></b></ul>
	<br><li><a href="http://github.com">Github</a></li><br><br>
	<li><a href="http://microsoft.com">Microsoft</a></li><br><br>
	<li><a href="http://bing.com">Bing</a></li><br>
<p style="margin-right: 0; margin-top: 20px;">COPYRIGHT</p>
</div>
</center>
</body>
</html>

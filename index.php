<html>
<?php
ob_start();
if(isset($_POST["submit"]))
{
	if ($_POST["username"] == "admin" && $_POST["password"] == "admin")
	{
		header("location: insert.php");
	}
	else
	{
		header("location: index.php");
	}
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
		<a href="index.php">Home</a>
		<a href="login-form">Login</a>
		
<div id="day-hadis">
<marquee onmouseover="this.stop();" onmouseout="this.start();"> Microsoft 10kb website </marquee>
</div>
	</div><br>
	<div id="body-menu-right">
		<img src="li.png" id="li-tag" /><p>Documents</p><br></br><br>
		<?php
		include "config.php";
		$query = mysql_query("SELECT * FROM `db`.`documents`");
		while($rows = mysql_fetch_assoc($query))
		{
			echo '<img src="ui.png" class="ui-tag" /><a href="'.$rows['link'].'">'.$rows['title'].'</a><br><br><br>';
		}
		
		?>
	</div>
	<div id="body-menu-left">
		<img src="li.png" id="li-tag" /><p>Microsoft Docs</p><br></br><br>
		<img src="ui.png" class="ui-tag" /><a href="goo.gl/iEIiBR">.net framework source</a><br><br><br>
		<img src="ui.png" class="ui-tag" /><a href="goo.gl/rKSA6F">c# tutorial msn</a><br><br><br>
		<img src="ui.png" class="ui-tag" /><a href="goo.gl/wgD8hS">Get started with ASPX</a><br><br><br>
		<img src="ui.png" class="ui-tag" /><a href="goo.gl/bpW2CH">Download Visual Studio latest version</a><br><br><br>
	</div>
<div id="body-menu-center">
<p>Dear User you can login with default username and password, and insert new to documents menu.</p>
<br><br><br>

<form method="post" name="login-form" id="login-form">

<label>Username: </label><input type="text" name="username" id="username" style="width: 40%;" required ><span id="userError" style="color: red;"> *</span><br><br>
<label>Password: </label><input type="password" name="password" id="password" style="width: 40%;" required ><span id="passError" style="color: red;"> *</span><br><br>
<input type="submit" value="Login" name="submit" >

</form><br>
<p><b><i>Username:</i></b> admin</p><p><b><i>Password:</i></b> admin</p>
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

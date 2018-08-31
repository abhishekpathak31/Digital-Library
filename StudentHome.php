<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body topmargin=0  style="background-image:url(4.jpg);  background-size: 1300px;">
	<div>
	<h1 style="color:#953308;"><center><span style="background-color:gold;">Hello!<?php echo $_SESSION["name"];?></span></center></h1>
	</div>
	<br><br><br><br><br><br><br><br>
	<center>
		<div align="center" style="background-color:gold; width:315px; height:125px; color:#953308; ">
			<h2 align="center">Student Access</h2>
			<form action="searching.php" method="POST">
			<table align="center" border="0" cellspacing="4" cellpadding="4" align="center">
			<tr><td><b>Search Book by:</b></td><td><input type="radio" name="searchby" value="Id">Id
			<input type="radio" name="searchby" value="Title">Title
			<input type="radio" name="searchby" value="Author">Author</td></tr>
			<center><tr><td><td><input type="submit" value=" Submit " name="btnsubmit"></td></td></tr></center>
		</div>
	</center>
</body>
</html>
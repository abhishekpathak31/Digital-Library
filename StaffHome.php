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
	<h1 style="color:#FFFFFF;"><center><span style="background-color:gold;">Hello!<?php echo $_SESSION["name"];?></span></center></h1>
	</div>
	<br><br><br><br><br><br><br><br>
	<center>
		<div align="center" style="background-color:gold; width:250px; height:125px; color:#FFFFFF; ">
			<h2 align="center">Staff Access</h2>
			<form action="Staff.php" method="POST">
			<table align="center" border="0" cellspacing="4" cellpadding="4" align="center">
			<tr><td><b>Option:</b></td><td><select name="opt" ><option>Add New Book</option><option>View Book Details</option><option>Delete Book</option>
			<option>Issue Book</option><option>Return Book</option><option>Renew Book</option></td></tr>
			<center><tr><td><td><input type="submit" value=" Submit " name="btnsubmit"></td></td></tr></center>
		</div>
	</center>
</body>
</html>
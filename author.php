<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body topmargin=0  style="background-image:url(4.jpg);  background-size: 1300px;">
	<br><br><br><br><br>
	<center>
		<div align="center" style="background-color:gold; width:250px; height:100px; color:#953308; ">
			<form onsubmit="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">  
			<h2><b>Enter Book Author:</b></h2><input type="text" name="auname">
			<center><tr><input type="submit" value=" Submit " name="btnsubmit"></tr></center>
			</form>
		</div>
	</center><br><br>
	<center>
	<div align="left" style="background-color:gold; width:350px; height: 250px; color:#953308;">
	<?php
	include_once("file:///C:/xampp/htdocs/modules/dbconnect.php");
	$db = new Database();
	$db->connect();
	$tbl_name="book_master";
	$au=$_POST['auname'];
	$sql="SELECT * FROM Book_Master WHERE Author1='$au';";
	$res=$db->selectData($sql);
	$count=mysqli_num_rows($res);
	if($count!=0)
	{
		while($data=mysqli_fetch_assoc($res))
		{
			echo "<h2><center>BOOK DETAILS:</center></h2>";
			echo " Book ID:",$data['Book_ID'],"<br>";
			echo " Book Title:",$data['Book_Title'],"<br>";
			echo " Book Edition:",$data['Edition'],"<br>";
			echo " Book Author:",$data['Author1'],"<br>";
			echo " Price:",$data['Price'],"<br>";
			echo " Publisher:",$data['Publisher'],"<br>";
			echo " Book Type:",$data['Book_Type'],"<br>";
			echo " Book Status:",$data['Book_Status'],"<br>";
			
			echo " LOC:",$data['Loc'],"<br>";
			echo " Library Name:",$data['Library_Name'],"<br>";
		}
		
	}
	else
	{
		echo "<h2>Unavailable</h2>"; 
	}
	?>
	</div>
	</center>
	</body>
</html>
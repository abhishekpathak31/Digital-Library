<?php
session_start();
?>
<?php
include_once("file:///C:/xampp/htdocs/modules/dbconnect.php");

$db = new Database();

$db->connect();

$tbl_name="user_master";

$myusername=$_POST['uname'];
$mypassword=$_POST['pwd'];
$remember=$_POST['remem'];
$_SESSION["name"]=$myusername;
if(isset($remember))
{
	setcookie('uname',$myusername,time()+60*60*24);
	setcookie('pwd',$mypassword,time()+60*60*24);
}
else
{
	setcookie('uname',$myusername,time()-5);
	setcookie('pwd',$mypassword,time()-5);
}
$sql="SELECT * FROM User_Master WHERE User_Name='$myusername' and 
User_PWD='$mypassword';";
$res=$db->selectData($sql);
$count=mysqli_num_rows($res);

if($count==1){
	echo "Inside if count";
	$row=mysqli_fetch_assoc($res);
	$User_Type=$row["User_Type"];
	
	if ($User_Type=="Admin")
	{
		header("location:AdminHome.php");
	}
	else if ($User_Type=="Staff")
	{
		echo "Inside student";
		header("location:StaffHome.php");
	}
	else if ($User_Type=="Student")
	{
		header("location:StudentHome.php");
	}
}
else 
{
	echo "<script>
	alert('Invalid User Name/Password.');
	window.location.href='librarylog.html';
	</script>";
	
}
?>

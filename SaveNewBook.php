<?php
extract($_POST);
$mysqli=new mysqli('localhost','root','','db_srm_lib');
if($mysqli->connect_errno>0)
{
	die('Unable to connect to database['.$mysqli->connect_error.']');
}
$query = "INSERT INTO book_master VALUES ('$bookid','$title','$edi','$aut','$pri','$pub','$typ','$stat','$name','$loc','$libname')";
		$insert_row = $mysqli->query($query);
		if($insert_row)
		{
		  header("location:Book.html");
		}
		else
		{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>

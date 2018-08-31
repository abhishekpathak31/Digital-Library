<?php
extract($_POST);
$mysqli=new mysqli('localhost','root','','db_srm_lib');
if($mysqli->connect_errno>0)
{
	die('Unable to connect to database['.$mysqli->connect_error.']');
}
$query="SELECT * FROM book_issue_details WHERE '$booki'=Book_ID";
$insert_row=$mysqli->query($query);
		$insert_row = $mysqli->query($query);
		if($insert_row)
		{
		  header("location:DBook.html");
		}
		else
		{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>

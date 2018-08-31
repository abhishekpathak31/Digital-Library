<?php
extract($_POST);
$mysqli=new mysqli('localhost','root','','db_srm_lib');
if($mysqli->connect_errno>0)
{
	die('Unable to connect to database['.$mysqli->connect_error.']');
}
$q="DELETE FROM book_issue_details WHERE '$booki'=Book_ID";
$d_row=$mysqli->query($q);
$query = "DELETE FROM book_master WHERE '$booki'=Book_ID";
		$delete_row = $mysqli->query($query);
		if($delete_row)
		{
		  header("location:DBook.html");
		}
		else
		{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>

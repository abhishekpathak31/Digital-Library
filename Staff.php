<?php
include_once("file:///C:/xampp/htdocs/modules/dbconnect.php");

$db = new Database();

$db->connect();
$opts=$_POST['opt'];
if(strcmp($opts,"Add New Book")==0)
{
	$tbl_name="book_master";
	header("location:op1.php");
}
else if(strcmp($opts,"View Book Details")==0)
{
	$tbl_name="book_master";
	header("location:op2.php");
}
else if(strcmp($opts,"Delete Book")==0)
{
	$tbl_name="book_master";
	header("location:op3.php");
}
else if(strcmp($opts,"Issue Book")==0)
{
	$tbl_name="book_issue_details";
	header("location:op4.php");
}
else if(strcmp($opts,"Return Book")==0)
{
	$tbl_name="book_issue_details";
	header("location:op5.php");
}
else
{
	$tbl_name="book_issue_details";
	header("location:op6.php");
}
?>
<?php
include_once("file:///C:/xampp/htdocs/modules/dbconnect.php");

$db = new Database();

$db->connect();

$tbl_name="book_master";

$bookby=$_POST['searchby'];
if(strcmp($bookby,"Id")==0)
	header("location:id.php");
else if(strcmp($bookby,"Author")==0)
	header("location:author.php");
else
	header("location:title.php");
?>
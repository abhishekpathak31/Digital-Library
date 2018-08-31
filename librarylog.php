<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<script type="text/javascript">
        function validate()
		{
			if(document.forms["myForm"]["uname"].value=="")
			{
				alert("Please provide your User Name!");
				return false;
			}
			if(document.forms["myForm"]["pwd"].value=="")
			{
				alert("Please provide your Password!");
				return false;
			}
		}
      </script>
      </head>
<body topmargin=0  style="background-image:url(4.jpg);  background-size: 1300px;">
	
    <div class="container" >
	    <div class="header1">
        </div>
	<center>
	<div class="header2" style="width:350px;">
					<br>
	<h1 style="color:#953308;"><center><span style="background-color:gold;">Online Library System</span></center></h1>
		</div>
		</center>
		<div class="header3">
        </div>

    	<div class="wrapper">
			<div class="sidebar2">
				<div class="nav">
					<table style="width:100%;" valign="left" border="0" cellspacing="4" cellpadding="4">
						<tr><td><div class="sidebarinfo2" style="background: url(images/SRM1.jpg)"></div></td></tr>
						<tr><td><div class="sidebarinfo2" style="background: url(images/SRM5.jpg)"></div></td></tr>
					</table>
				</div>
			</div>
			<br><br><br>
			<center>
			<div class="content" align="center" style="background-color:gold; width:300px; height:210px ;color:#953308;">
			<h1><b>User Login</b></h1><br>
				<form name="myForm" action="CheckLogin.php" onsubmit="return validate()"  method="POST"  ;>
				<table valign="left" border="0" cellspacing="4" cellpadding="4" ;>
					<tr><td><b>User Name</b></td><td><input type="text" name="uname" value=<?php echo Cookie_val(1) ?> ></tr>
					<tr><td><b>Password</b></td><td><input type="password" name="pwd" value=<?php echo Cookie_val(2) ?> </tr>
					<tr><td></td><td><input type="checkbox" name="remem" id="remember"><b>Remember me</b></td></tr>
					<tr><td></td><td><input type="submit" value=" Sign in " name="btnnewuser" >&nbsp;&nbsp;&nbsp;<a href="library.html"><b>New User</b></a></tr>
				</table>
				</form>
            </div>
			</center>
			<div class="sidebar2">
				<div class="nav">
					<table style="width:100%;" valign="left" border="0" cellspacing="4" cellpadding="4">
						<tr height="7px"></tr>
						<tr><td><div class="sidebarinfo2" style="background: url(images/SRM6.jpg)"></div></td></tr>
						<tr height="25px"></tr>
						<tr><td><div class="sidebarinfo2" style="background: url(images/SRM4.jpg)"></div></td></tr>
					</table>
				</div>
			</div>

			<div class="clearfix"> 
			</div>
        </div>
		<div class="section" style="color:#FFFFFF">
			<br><br><br>
				<p><marquee SCROLLAMOUNT = 4 style="color:white;"><b>This library system contains more than 1 million books and periodicals on all subjects related to the teaching and research interests of the University staff and students. The library has over 52,000 electronic journal titles.</b></marquee> </p>
				</p>
		</div>
        <div class="footer">
        	<p align="center" style="color:white;"><b> &copy Abhishek Pathak (RA1511008010274); </b></p>
        </div>
    </div>
</body>
<?php
		function Cookie_val($ch){
		if ($ch==1)
		{	
			if (isset($_COOKIE['uname']))
			{
				return $_COOKIE['uname'];
			}
			else 
				return;
		}
		else
		{
			if (isset($_COOKIE['pwd']))
			{
				return $_COOKIE['pwd'];
			}
			else 
				return;
		}
		}
	?>

</html>

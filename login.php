<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<style>
body {
    background-image: url("ff.jpg");
    color:white;
}
</style>
</head>
<body>

<h1 align="center" style="font-size:40px;"><i>Football Management System</i></h1>
<h1 align="left" style="font-size:30px;"><i>Admin login</i></h1>
<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="left" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="left"><i><b>Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="left"><i><b>Password</div></td>
    <td><input name="psw" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>
</body>
</html>
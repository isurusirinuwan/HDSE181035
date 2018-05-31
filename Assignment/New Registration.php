<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form method="post" action="#">
		<table>
			<tr>
				<td>Username : </td>
				<td><input type="text" name="txtUserN" required /></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="txtPassW" required/></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="btnRegister" value="Register"/></td>
			</tr>
		</table>
	</form>
<?php
if(isset($_POST['btnRegister']))
	{	
		$username = $_POST['txtUserN'];
		$password = $_POST['txtPassW'];
		$con = mysqli_connect("localhost","root","","ss");
		$stmt = $con->prepare("INSERT INTO users VALUES(?,?)");
		$stmt->bind_param("ss", $username,$password);
		$stmt->execute();
		$stmt->close();
		$con->close();
		header('Location:Main Page.php');
	}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<form method="post" action="#">
		
	<?php

	if(isset($_COOKIE["user"]))
	{
		$user = $_COOKIE["user"];
		echo "Welcome, $user"."<br/>";

	}
	else
	{
		header('Location:Main Page.php');
	}
	echo '<input type=\'submit\' name=\'btnLogout\' value=\'Logout\'>';
	if(isset($_POST['btnLogout']))
	{
		setcookie("user","$user",time()-300);
		header("Refresh:0");
	}
	?>
</body>
</html>
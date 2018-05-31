<html>
<head>
<title>Index HDSE181035</title>
<head/>
<body>
<h1>GuestBook</h1>

<form name="comment assignment" method="post" action="#">
<label><h3>please Enter Your Name<h3/><label/>
<label>Name<label/><input type ="text" name= "name"/>
<label><h3>please enter your Comment :</h3><label/>

<textarea cols="100" rows="20" placeholder="your comment please" name="comm" ></textarea><br>
  <input type="submit" name="btncom" value=" Send  comment" />
  
 </form>
<?php

if(isset($_POST["btncom"]))
{     $name = $_POST["name"];
	//$type = $_POST["user"];
	$comment = $_POST["comm"];
	
	$con= mysqli_connect("localhost","root","");
	mysqli_select_db($con,"assignSS");
	$sql = "INSERT INTO comment (	name, comt) VALUES('$name','$comment')";
	$result = mysqli_query($con,$sql);
	
	echo"LEATEST COMMENNT ".$comment;
	
}

?>


</body>
</html>
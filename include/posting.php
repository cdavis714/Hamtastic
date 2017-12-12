<?php

//Not yet functional!
 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'hamtastic'); 
define('DB_USER','root'); 
define('DB_PASSWORD','hamtastic'); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function posting() 
{ 

// need to insert into Posts with the picture uploaded and content based on the id from the email
//{ 

//	$query = mysql_query("SELECT Customer_ID FROM Customer WHERE Email = '$_POST[Email]'") or die(mysql_error()); 
//	$query1 = mysql_query("INSERT INTO Posts VALUES ('','$_POST[fullName]','$_POST[email]','$_POST[school]')") or die(mysql_error()); 
	$query2 = "SELECT Customer_ID FROM Customer WHERE Email = '$_POST[email]'";
	$result = mysql_query($query2) or die();
	while($row = mysql_fetch_array($result)) {
//	$row = mysql_fetch_array($result);
	echo $row['Customer_ID'];
	$name = $row['Customer_ID'];
	$query3 = "INSERT INTO Posts VALUES ('$name','',CURDATE(),'$_POST[postContent]')";
//	$result2 = mysql_query($query3) or die();
	echo "Post Successful";
//	header('Location: ../hamSignUpSuccessful.html');
	}
//}
//else 
//{
//	header('Location: ../signUpYourselfRetry.html'); 
//}
} 

if(isset($_POST['submit'])) 
{ 
	posting(); 
} 

?>

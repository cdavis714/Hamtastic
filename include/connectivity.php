<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'hamtastic'); 
define('DB_USER','root'); 
define('DB_PASSWORD','hamtastic'); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

/* $ID = $_POST['user']; 
$Password = $_POST['pass']; */ 

function SignIn() 
{ 
session_start(); 
/*starting the session for user profile page*/ 
if(!empty($_POST['Email'])) 
/*checking the 'user' name which is from Sign-In.html, is it empty or have some text */
{ 
//	$query = mysql_query("SELECT * FROM Clogin where Email = '$_POST[Email]' AND Password = md5('$_POST[Password]')") or die(mysql_error()); 
	$query = mysql_query("SELECT * FROM Clogin WHERE C_ID = (SELECT Customer_ID FROM Customer WHERE Email = '$_POST[Email]') and Password = md5('$_POST[Password]')") or die(mysql_error()); 
	$row = mysql_fetch_array($query); //or die(mysql_error()); 
	if(!empty($row['C_ID']) AND !empty($row['Password'])) 
	{ 
		$_SESSION['C_ID'] = $row['Password']; 
	//	echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
		header('Location: ../needsFixing.html'); 
	} 
	else 
	{ 
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		header('Location: ../hamRetryLogin.html'); 
	} 
} 
} 
if(isset($_POST['submit'])) 
{ 
	SignIn(); 
} 

?>

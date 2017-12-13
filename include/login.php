<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'hamtastic'); 
define('DB_USER','root'); 
define('DB_PASSWORD','hamtastic'); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function SignIn() 
{ 
session_start(); 
//starting the session for user profile page
if(!empty($_POST['Email'])) 
//checking the user's email address from entry to form in ../hamLogin.html
{ 
	$query = mysql_query("SELECT * FROM Clogin WHERE C_ID = (SELECT Customer_ID FROM Customer WHERE Email = '$_POST[Email]') and Password = md5('$_POST[Password]')") or die(mysql_error()); 
	$row = mysql_fetch_array($query);
	if(!empty($row['C_ID']) AND !empty($row['Password'])) 
	{ 
		$_SESSION['C_ID'] = $row['Password']; 
	//if login is successful, then proceed to the authenticated user's home page
		header('Location: ../mainPage.php'); 
	} 
	else 
	{ 
	//if login is unsuccessful, then rediredt back to the login page
		header('Location: ../hamRetryLogin.html'); 
	} 
} 
} 
if(isset($_POST['submit'])) 
{ 
	SignIn(); 
} 

?>

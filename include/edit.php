<?php
 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'hamtastic'); 
define('DB_USER','root'); 
define('DB_PASSWORD','hamtastic'); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function chamgePass() {
}

function editProfile() 
{ 
//starting the session for user profile page
//if(($_POST['email'] == $_POST['confEmail']) && ($_POST['password'] == $_POST['confPassword']))
//checking if the user's email and password were correctly entered twice from entry to form in ../hamSignUpYourself.html
//{ 

	$query2 = "SELECT Customer_ID FROM Customer WHERE Email = '$_POST[email]'";
	$result = mysql_query($query2) or die();
	while($row = mysql_fetch_array($result)) {
//	echo $row['Customer_ID'];
	$name = $row['Customer_ID'];
	$query = mysql_query("DELETE FROM Profile WHERE C_ID = '$name'");
	$query3 = "INSERT INTO Profile VALUES ('$name','$_POST[bio]','$_POST[files]')";
	$result2 = mysql_query($query3) or die();
	}
	header('Location: ../profilePage.html');


} 
if(isset($_POST['submit'])) 
{ 
	editProfile(); 
} 

?>

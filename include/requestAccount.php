<?php
 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'hamtastic'); 
define('DB_USER','root'); 
define('DB_PASSWORD','hamtastic'); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function requestAccount() 
{ 
//starting the session for user profile page
if(($_POST['email'] == $_POST['confEmail']))
//checking if the user's email was correctly entered twice from entry to form 
{ 

 $to = "connordavis714@gmail.com";
 $subject = "Requesting Hamtastic account for $_POST[fullName]"};
 $body = "email: $_POST[email]\nCompany or School: $_POST[companyorSchool]\n";
 if (mail($to, $subject, $body)) {
 echo("<p>Email successfully sent!</p>");
 } else {
 echo("<p>Email delivery failed…</p>");
 }



/*
	$query1 = mysql_query("INSERT INTO Customer VALUES ('','$_POST[fullName]','$_POST[email]','$_POST[school]')") or die(mysql_error()); 
	$query2 = "SELECT Customer_ID FROM Customer WHERE Email = '$_POST[email]'";
	$result = mysql_query($query2) or die();
	while($row = mysql_fetch_array($result)) {
//	echo $row['Customer_ID'];
	$name = $row['Customer_ID'];
	$query3 = "INSERT INTO Clogin VALUES ('$name',md5('$_POST[password]'))";
	$result2 = mysql_query($query3) or die();
	}
	header('Location: ../hamSignUpSuccessful.html');

}
else 
{
	header('Location: ../signUpYourselfRetry.html'); 
}

*/
} 

if(isset($_POST['submit'])) 
{ 
	requestAccount(); 
} 

?>

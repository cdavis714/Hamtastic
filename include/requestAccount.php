<?php

function requestAccount() 
{ 
if(($_POST['email'] == $_POST['confEmail']))
//checking if the user's email was correctly entered twice from entry to form 
{ 

$athlete = $_POST['fullName'];
$emailAddr = $_POST['email'];
$company = $_POST['companyorSchool'];
$reason = $_POST['reasonText'];

$to = "cdavis46@students.towson.edu";
$subject = "Requesting Hamtastic account for $athlete";
$body = "Email: $emailAddr \nCompany or School: $company\nReason for needing account: $reason\n";
//$headers = "From: $emailAddr";
$headers = "From: accounts@hamtastic.net";
mail($to,$subject,$body,$headers);
//echo "Request for $athlete successfully sent!";
header('Location: ../requestSubmittedHome.html');
}
else {
header('Location: ../requestFailed.html');
}

}

if(isset($_POST['submit'])) 
{ 
	requestAccount(); 
} 

?>

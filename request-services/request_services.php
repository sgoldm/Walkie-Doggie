<?php

if  (strlen($_POST["first_name"]) < 3 || strlen($_POST["last_name"]) < 3 || strlen($_POST["address"]) < 3 || strlen($_POST["city"]) < 3 || strlen($_POST["email"]) < 3)
{ 
	echo("Required form fields were not submitted.<br/><br/><a href='/request-services/'>Back</a>");
}
else
{

	// To send HTML mail, the Content-type header must be set
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	
	// Additional headers
	//$headers .= "To: Walkie Doggie <info@walkiedoggie.com>" . "\r\n";
	$from = "From: Walkie Doggie Site <info@walkiedoggie.com>";
	
	$message = "<font face='Arial, Verdana, Helvetica, sans-serif' pointsize='9'>";
	$message .= "---------------------------------------------<br>
				 Request for Services<br>
				 ---------------------------------------------<br><br>
				 
				 First Name:					" . $_POST["first_name"] . "<br>
				 Last Name:						" . $_POST["last_name"] . "<br><br>
				
				 Address:						" . $_POST["address"] . "<br>
				 City:							" . $_POST["city"] . "<br>
				 State:							" . $_POST["state"] . "<br>
				 Zip:							" . $_POST["zip"] . "<br><br>
				
				 Phone 1:						" . $_POST["phone1"] . "<br>
				 Phone 2:						" . $_POST["phone2"] . "<br>
				 Phone 3:						" . $_POST["phone3"] . "<br><br>
				
				 Email:							" . $_POST["email"] . "<br><br>
				
				 Name of Pet(s):				" . $_POST["pet_names"] . "<br>
				 Species/Breed of Pet(s):		" . $_POST["pet_species"] . "<br><br>
				
				 Services wanted:				" . $_POST["services_wanted"] . "<br><br>
				
				 Do pets need special care:		" . $_POST["special_needs"] . "<br>
				 Special needs description:		" . $_POST["special_needs_desc"] . "<br><br>
				
				 Date/Time of services:			" . $_POST["service_times"] . "<br><br>
				
				 Initial visit availability:	" . $_POST["visit_time"] . "<br><br>

				 Heard about WD from:			" . $_POST["heard_from"] . "<br>";

	$from = urldecode($from);
	if (eregi("\r",$from) || eregi("\n",$from)){
		die("Spammer detected");
	}
	
	$headers .= $from;
	
	mail("sarahrgoldman@gmail.com","Request for Services",$message,$headers);
	
	header('Location: /request-services/thank-you/');

}
?>
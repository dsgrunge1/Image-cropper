<?php
session_start(); 
$site_name = "Eliza Rubber Plantations";
	if(isset($_POST['EMAIL'])) {
		$email_from=$_POST['EMAIL'];
		$email_to = "info@elizarubberplantations.com";
		$email_subject = "Info Email from : ".$site_name;
		function died($error) {
			echo "We are very sorry, but there were error(s) found with the form you submitted.";
			echo "These errors appear below.<br /><br />";
			echo $error."<br /><br />";
			echo "Please go back and fix these errors.<br /><br />";
			die();
		}
		if(!isset($_POST['EMAIL'])) {
			died('We are sorry, but there appears to be a problem with the form you submitted.');       
		}

		$name = $_POST['EMAIL'];
		$error_message = "";
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	  if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	  }
	  if(strlen($error_message) > 0) {
		died($error_message);
	  }
		$email_message = "Information & Updates message details below: \n\n";
		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}
		$email_message .= "Email: ".clean_string($email_from)."\n";

		$_header = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$result=@mail($email_to, '=?UTF-8?B?'.base64_encode($email_subject).'?=', $email_message, $_header . $headers);  

		if($result){
			echo "success";
		}
	}

exit();
?>
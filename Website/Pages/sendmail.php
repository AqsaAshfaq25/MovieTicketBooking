<?php

// Replace this with your own email address
// $to = $email;

// function url(){
//   return sprintf(
//     "%s://%s",
//     isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
//     $_SERVER['SERVER_NAME']
//   );
// }

if(isset($_POST['sendmail'])) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   $message = trim(stripslashes($_POST['message']));

   if(empty($name)){
      $error="* Please enter your name";
   }elseif(empty($email)){
      $error="* Please enter a valid email address";
   }elseif(empty($subject)){
      $error="* Please enter your subject";
   }elseif(empty($message)){
      $error="* Please enter a message";
   }else{

  
   $to = "ticketsbucket135@gmail.com";
   $subject = $subject;

   $message .= "<br/>" . "Email from: " . $name . "<br/>";
	$message .= "Email address: " . $email . "<br/>";
   // $message .= "Subject: " .$subject . "<br/>";
   $message .= "Message: " .$message. "<br/>";
   // $message .= nl2br($message);
   $message .= "<br /> ----- <br /> This email was sent from your site " . "url('http://localhost/ticketBuckets/website/Pages/index.php')" . " contact form. <br />";

   // $from =  $name . " <" . $email . ">";

   // $headers = "From: " . $from . "\r\n";
   $headers .= "Reply-To: ". $email . "\r\n";
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= 'Content-type:text/html;charset-UTF-8' . "\r\n";

   $headers .= "From: '$email'";

   $mail = mail($to, $subject, $message, $headers);
  
   if($mail){
      echo "<script>alert('Mail Send Successfully.')</script>";
      echo "<script>window.location.href = 'ContactUs.php';</script>"; 
   }else{
      echo "<script>alert('Mail Not Send..!')</script>";
      echo "<script>window.location.href = 'ContactUs.php';</script>"; 
   }
  }

	// if ($subject == $subject) { $subject = "Contact Form Submission"; }

   // // Set Message
   // $message .= "Email from: " . $name . "<br />";
	// $message .= "Email address: " . $email . "<br />";
   // $message .= "Message: <br />";
   // $message .= nl2br($contact_message);
   // $message .= "<br /> ----- <br /> This email was sent from your site " . url('http://localhost/ticketBuckets/website/Pages/index.php') . " contact form. <br />";

   // // Set From: header
   // $from =  $name . " <" . $email . ">";

   // // Email Headers
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $email . "\r\n";
 	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   // ini_set("$email", $to); // for windows server
   // $mail = mail($to, $subject, $message, $headers);

	// if ($mail) { echo "OK"; }
   // else { echo "Something went wrong. Please try again."; }

}

?>


<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_subject = "New Form submission";
$email_body =  "First Name: $name.\n".
               "Email Address: $visitor_email.\n".
                "Message:\n".
                $_POST['message'];
 
               //"Here is the message: $message  \n".
    
$to = "pawanrocks116@gmail.com";//<== update the email address
$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thankyou.html');   
?>



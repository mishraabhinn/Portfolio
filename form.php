<?php
if(lisset($_POST['submit']))
{
//This page should not be accessed directly. Need to submit the form.
echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)|| empty($visitor_email))

{

echo "Name and email are mandatory!";
exit;
}
$email_From = 'aviabhinn98@gmail.com'; // Put your email address here
$email_subject = "New Form submission";
$email_body ="You have received a new message from the user $name.\n".
"email address: $visitor_email\n".
"Here is the message: \n message".

$to = "aviabhinn98@gmail.com";//<= Put your email address here
$headers = "From: Email_from \r\n";

//Send the email!
mail($to, $Email_subject, $Email_body, $Headers);
//done. redirect to thank you page.
Shenders);


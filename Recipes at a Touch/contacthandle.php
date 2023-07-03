<?php
 $name= $_POST['name'];
 $visitor_email=$_POST['email'];
 $message=$_POST['message'];

 $email_from = 'RecipesAtATouch.com';
 $email_subject = "New form submission";

 $email_body = "User Name:$name./n".
 "User Email: $visitor_email./n".
 "User Message: $message./n";

$to ="bsiddhi14@gmail.com";
$headers = "From: $email_from./n";
$headers = "Reply-To:$visitor_email./n ";
mail($to,$email_subject,$email_body,$headers);
header("Location: contactus.html");
  ?>
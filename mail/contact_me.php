<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'ceo@mxemp.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulario del website de tlapa de comonfort, gro.";
$email_body = "Tu acabas de recibir un nuevo mensaje del formulario.\n\n"."Aqui para mas detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
$headers = "De: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reenviar: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

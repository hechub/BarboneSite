<?php
// Check for empty fields
if(empty($_POST['nome']) || empty($_POST['email'])  || empty($_POST['assunto']) || empty($_POST['mensagem']))
{
	echo "No arguments Provided!";
	return false;
 }
	
$name = strip_tags(htmlspecialchars($_POST['nome']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$assunto = strip_tags(htmlspecialchars($_POST['assunto']));
$message = strip_tags(htmlspecialchars($_POST['mensagem']));
	
// Create the email and send the message
$to = 'contato@barbone.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "$assunto";
$email_body = "Você recebeu uma nova mensagem.\n\n"."\n\nName: $name\n\nEmail: $email\n\nMensagem:\n$message";	
mail($to,$email_subject,$email_body,'From: noreply@barbone.com.br');
echo "mensagem enviada";
header('Location: index.html');
return true;			
?>

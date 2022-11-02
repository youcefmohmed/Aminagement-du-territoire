<?php
if(empty($_POST['Nom']) || empty($_POST['sujets']) || empty($_POST['message']) || !filter_var($_POST['E-mail'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$Nom = strip_tags(htmlspecialchars($_POST['Votre Nom']));
$E-mail = strip_tags(htmlspecialchars($_POST['Votre E-mail']));
$m_sujets = strip_tags(htmlspecialchars($_POST['Les sujets']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "abouyoucefyoucef2002@gmail.com"; // Change this E-mail to your //
$subject = "$m_subject:  $Nom";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nNom: $Nom\n\n\nE-mail: $E-mail\n\nsujets: $m_sujets\n\nMessage: $message";
$header = "From: $E-mail";
$header .= "Reply-To: $E-mail";	

if(!mail($to, $sujets, $body, $header))
  http_response_code(500);
?>
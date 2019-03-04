<?php
  // Here we get all the information from the fields sent over by the form.
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  $message = $_POST['message'];
 
  $to = 'anabelrobledoweb@hotmail.com';
  $subject = 'Contacto desde AnabelRobledo.com';
  
  $message = "Anabel, alguien te ha enviado un email desde el formulario de contacto de AnabelRobledo.com\n";
  $message.= "\n";
  $message.= "\n";
  $message.= "NOMBRE: ".$_POST['name']."\n";
  $message.= "EMAIL: ".$_POST['email']."\n";
  $message.= "TELEFONO: ".$_POST['phone']."\n";
  $message.= "HORA: ".date("h:i:s a ")."\n";
  $message.= "FECHA: ".date("D, d M Y")."\n";
  $message.= "---\n\n";
  $message.= $_POST['message']."\n\n";
  $message.= "---\n\n";
	$message.= "powered by tachuso.com\n";
  
  $headers = 'From: noreply@anabelrobledo.com';
 
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
    echo "Sent"; // success message
  }else{
    echo "WrongEmail";
  }

?>
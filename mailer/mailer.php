<?php

$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["mail"]);
  $message = test_input($_POST["message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$message = wordwrap($message, 70, "\r\n");

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$email."\r\n";
$headers .= "Reply-To: ".$email."\r\n";

mail('magicpurplecow@gmail.com','From Cribellum', 'Name: '. $name . ", " . "Email: " . " " .$email . ", says: ". "<br>" . $message, $headers); //  magicpurplecow@gmail.com
echo '<script>alert("Thanks for your message!"); window.location.href=document.referrer;</script>';
die;
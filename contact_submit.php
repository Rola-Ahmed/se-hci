<?php


//Require contact class from class folder
require 'contact.class.php';

//Start ContactSubmit class
$email = new ContactSubmit();

//Collect Pramaters
$email->from = $_POST['email'];
$email->sendTo = "email@email.com";//Put the email address you want to recive emails on here.
$email->name = $_POST['name'];
$email->subject = $_POST['subject'];
$email->message = "
From: ". $_POST['email'] . "
Name: " . $_POST['name'] . "
Subject: " . $_POST['subject'] . "
Message: " . $_POST['message'] . 
;

//SendMail
$email->sendMail();

//Redirect
$email->redirect("form.php?mess=1");

?>

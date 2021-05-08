<?php


//Require contact class from class folder
require 'contact.class.php';

//Start ContactSubmit class
$history = new SubmitHistory();

//Collect Pramaters


$history->Systolic = $_POST['name'];
$history->Diastotic = $_POST['Diastotic'];
$history->Addnewitem = $_POST['Addnewitem'];
$history->moreinfvisit = $_POST['moreinfvisit'];


//SendMail
$email->sendMail();

//Redirect
$email->redirect("form.php?mess=1");

?>
 
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="cs/style.css">

<style>
body {
  background-color: #1E4E5F;
}
h1{
	text-algin:center;
	margin-left:600px;
	color:white;
	
}
h2{
	color:white;
	margin-left:80px;
	margin-top:10px;
}
h5{
	color:white;
	margin-left:80px;
	margin-bottom:10px;
}
        

</style>
</head>
<body>
<div class="header">
 
  <div class="header-right">
    
    <a>Contact US</a>
   
  </div>
</div>

<p class="example1"></p>
<h2>Send Message</h2>
<h5>make and appointment using the form or send us an email at </h5>

<?php
if (isset($mess) == 1) {
	echo "Success";
}else{
	echo "";
}
?>

<section class="contact">
<div class="content">


</div>
<div class="container">
<div class="contactInfo">
<div class="box">
<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
</div>

</div>
<div class="box">
<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
</div>

</div>
<div class="box">
<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
</div>

</div>
</div>
<div class="contactForm">
<form action="contact_submit.php" method="post">
<div class="checkbox">
<input type="checkbox"required="required">
<span>Emergency</span>
<input type="checkbox" required="required">
<span>Regular</span>
</div>

<div class="inputBox">
<input type="text" name="" required="required">
<span>Full Name</span>
</div>
<div class="inputBox">
<input type="text" name="" required="required">
<span>Phone</span>
</div>
<div class="inputBox">
<input type="text" name="" required="required">
<span>Subject</span>
</div>
<div class="inputBox">
<input type="text" name="" required="required">
<span>Email</span>
</div>
<div class="inputBox">
<textarea required="required"></textarea>
<span>Type your message.....</span>
</div>
<div class="inputBox">
<input type="submit" name=""   value="Make an appointment">

</div>
</form>
</div>
</div>
<div class="container">
  <img src="7.png" style="position:fixed; right:300px; bottom:30px; width:450px; height:450px; border:none;" ">
  <img src="8.png" style="position:fixed; right:300px; bottom:500px; width:450px; height:90px; border:none;" ">
  
 
</div>
</section>
</body>
<!--End of Contact form-->


</html>

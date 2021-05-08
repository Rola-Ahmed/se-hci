<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="cs/style2.css">

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
h6{
		width:250px;
			margin-left:700;
			position:top;
			
			padding:10px;
			font-size:18px;
			 position: absolute;
  left: 20px;
  bottom: 350px;
}
        

</style>
</head>
<body>
<div class="header">
 
  <div class="header-right">
    
    <a>Patient medical history</a>
   
  </div>
</div>


<?php
if (isset($mess) == 1) {
	echo "Success";
}else{
	echo "";
}
?>

<section class="contact">


<div class="contactForm">
<form action="submit history.php" method="post">


<div class="inputBox">
<h3>Blood pressure</h3>
<input type="text" name="" required="required">
<span>Systolic</span><br>
<input type="text" name="" required="required">
<span>Diastotic</span><br>
<input type="text" name="" required="required">
<span>Add a new item</span>
</div>
<div class="checkbox">
<h4>Are you married?</h4>
<input type="checkbox"required="required">
<span>Yes</span>
<input type="checkbox" required="required">
<span>No</span><br>
<input type="text" name="" required="required">
<label>Details...</label><br>
</div>
<div class="inputBox">
<h5>More information for visit</h5>
<textarea required="required"></textarea>
<span>Type your information.....</span>
</div>
<div class="inputBox">
<h6>Past pictures & x-rays</h6>
<input type="submit1" name=""   value="Upload">

</div>

<div class="inputBox">
<input type="submit" name=""   value="Done">
 <img src="9.png" style="position:fixed; right:200px; bottom:200px; width:450px; height:250px; border:none;" ">
</div>
</form>
</div>
</div>

 
  
  
 
</div>
</section>
</body>



</html>

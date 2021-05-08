<?php

 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "lms";
 

 $courseId ="";
 $courseName = "";
 $courseHours ="";
 $description = "";
 $courseInstructor = "";
 $tinydesc ="";
 $price="";

 
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 }catch(Exception $ex){
     print "error";
 }

 function getPosts(){
     $posts = array();
	 
     $posts[0] = $_POST['courseId'];
     $posts[1] = $_POST['courseName'];
	 $posts[2] = $_POST['courseHours'];
     $posts[3] = $_POST['description'];
     $posts[4] = $_POST['courseInstructor'];
	 $posts[5] = $_POST['tinydesc'];
	 $posts[6] = $_POST['price'];
     return $posts;
 }
  
 
?>


<html>
 <head> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="cs/style3.css">

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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #C0C0C0;
  color: #1E4E5F;
}
        

</style>
 
  </head>
  <body>  
  <div class="header">
 
  <div class="header-right">
    
    <a>Patients file</a>
   
  </div>
</div>
    <div class = "div3">
    
    <table>
  <tr>
    <th>Name</th>
    <th>Last appointemrnt</th>
    <th>Medical history</th>
	<th>Prescription</th>
	<th>Next appointemrnt</th>
  </tr>
  
</tr>
</table>
    </div>      
 
  </body>
</html>
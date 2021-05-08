
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">


    

    <title></title>
</head>
<body>

    <div class="header flex">
        <div class="logo fl-1">
            <img src="logo.jpeg" alt="">
        </div>
        <div class="menu fl-2 flex">
         <a href="home.php"> <p class="fl-1 header-item"> Home </p>
           <a href="ont.php"> <p class="fl-1 header-item">Contact</p></a>
          <a href=""> <p class="fl-1 header-item">About</p></a> 
          <a href="logout.php">  <p class="fl-1 header-item">Logout</p></a>
        

        </div>

        <div class="user-infoo fl-1">

            <div class="flex" style="align-items:center;width: 60%;margin: 0 auto;">

                <div class="user-img">
                    <img src="user.png"alt="userimg.png">
         </div>
                <div class="user-name">
                    <a href="#" onclick="doClick(); return false;"><p><?php echo "Yasmine " ?></p></a>




                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Link to the google font  -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
		<!-- Link to the CSS file  -->
		<link rel="stylesheet" href="style.css">
		<title>Healthrecord </title>
	</head>

	<body>
		<?php
        include("header.php");?>
			<div class="form">
            <h1>Add a new patient</h1>
				<form method="POST" action="healthrecord.php">
                    <table>
                        <tr>
                            <td>
                            <b> <p>Firstname</p></b>
                            </td>
                            <td>
                            <input type="text" name="firstname" > </div>
                            </td>
                            <td>
                            <b> <p>Lastname</p></b>
                            </td>
                            <td>
                            <input type="text" name="lastname" > </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <b> <p>Phone Number</p></b>
                            </td>
                            <td>
                            <input type="text" name="Phone number" > </div>
                            </td>
                            <td>
                            <b> <p>Date of birth</p></b>
                            </td>
                            <td>
                            <input type="text" name="Date of birth" > </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <b> <p>Address</p></b>
                            </td>
                            <td>
                            <input type="text" name="Address" > </div>
                            </td>
                            <td>
                            <b> <p>Gender</p></b>
                            </td>
                            <td>
                            <input type="text" name="Gender" > </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <b> <p>Reason of visit</p></b>
                            </td>
                            <td>
                            <input type="text" name="Reasone of visit" > </div>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>
                            <b> <p>Past doctor name</p></b>
                            </td>
                            <td>
                            <input type="text" name="Past doctor name" > </div>
                            </td>
                            <td>
                            
                            </td>
                            <td>
                            <input type="Done" class="bButton" name="create" value="Done"> </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <b> <p>Health care</p></b>
                            </td>
                            <td>
                            <input type="text" name="Health care" > </div>
                            </td>

                            <td>
                         
                            </td>
                            <td>
                            <input type="Next" class="bButton" name="create" value="Next"> </div>
                            </td>

                        </tr>
                    </table>
				
				</form>
			</div>
	</body>

	</html>
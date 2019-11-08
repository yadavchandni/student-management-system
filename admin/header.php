<?php

	

		


?>







<!DOCTYPE html>

<html>

<head>

	<title>
		
		student_management_system

	</title>


	<link rel="stylesheet" type="text/css" href="../css\style.css">

</head>

<body style="background-image: url(../image/womans-hands-typing-laptop.jpg);

background-position: relative;

background-size: cover">


	<div class="admindash_title">


		<h1 class="admindash_contain">

			WELCOME TO ADMIN DASHBOARD

		</h1>


		<div style="margin-top: -55px;margin-left: 1210px;">

			
			<h3 >

					<button style="background-color: hsla(120, 60%, 70%, 0.3);margin-left:150px">


						<a class="logout-btn"  href="logout.php">LOGOUT</a>

				
					</button>
			</h3>


		</div>
	

		<div class="dashboard">

			<center>
			

			<table style="

	background: rgba(255,255,255,.9);box-shadow:  0 10px 15px; width: 50%; opacity: 1;

	padding-top: 50px;padding-bottom: 50px;text-align: center;	">




<!------insert Student Details------------>


				<tr >
					
					<td style="padding-bottom: 25px">

						1.

					</td>

					<td style="padding-bottom: 25px">
						
						<a href="addstudent.php">Insert Student Details</a>



					</td>

					
					
					<br>

				</tr>


<!---------------------Update Student Details------------------------------------->

				<tr>
					
					<td style="padding-bottom: 25px">

						2.
						
					</td>

					<td style="padding-bottom: 25px">
						
						<a class="student-details-menu" href="updatestudent.php">

							Update Student Details

						</a>


					</td>

					<br>

				</tr>





<!-------------------delete student details---------------------------->



				<tr>
					
					<td style="padding-bottom: 25px">

						3.
						
					</td>

					<td style="padding-bottom: 25px">
						
						<a href="deletestudent.php">Delete Student Details</a>


					</td>

				</tr>





				<tr >
					
					<td style="padding-bottom: 25px">

						4.
						
					</td>

					<td style="padding-bottom: 25px">
						
						<a href="displaystudent.php">Display Student Details</a>


					</td>

				</tr>



			</table>

		</center>


		</div>




	</div>	



	



</body>



</html>
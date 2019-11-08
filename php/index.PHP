<html>

	<head>

		<title>

			student_management_system


		</title>


		<link rel="stylesheet" type="text/css" href="..\css\style.css">



	</head>


	
	<body class="body_bg" style="background: -webkit-linear-gradient(left, red , blue);">

<div >
		
		<h1 class="wlcm_sms" style="background-color: #C0C0C0;color: black">



			<center > 


				

				WELCOME TO STUDENT MANAGEMENT SYSTEM

			</center>

		</h1>


		<h3 class="admin_login">


			<a href="login_form.php" style="color: white;margin-right:10px">ADMIN-LOGIN</a>


		</h3>

	</div>

	<div class="homepage">

		<form action="" method="post">

			<center>	

				<table border="2px" class="table_format" style="position: relative;

	background: rgba(255,255,255,.3);box-shadow:  0 10px 15px;">

	

					<tr>

						<td colspan="2" style="font-size: 20px;height: 50px">

							<center>

								<h1 style="color: white">
								<i>
								STUDENT-INFORMATION


								</i>

							</h1>
							</center>

						</td>
						
					</tr>

					<tr >

						<td style="font-size:20px">


							CHOOSE STANDARD

						</td>

						<td style="font-size:30px">

							<select style="width: 122px;height: 85%;font-size:20px;color:red" 


							name="std">
								
								<option value="1">1st</option>

								<option value="2">2nd</option>

								<option value="3">3rd</option>

								<option value="4">4th</option>

								<option value="5">5th</option>

								<option value="6">6th</option>

								<option value="7">7th</option>

								<option value="MCA">8th</option>
								<option value="MCA">9th</option>
								<option value="MCA">10th</option>
								<option value="MCA">11th</option>
								<option value="MCA">12th</option>

								<option value="b.tech">B.tech</option>

								<option value="BCA">M.tech</option>

								<option value="B.SC">B.SC</option>
								<option value="B.SC">M.SC</option>

								<option value="BCA">BCA</option>

								<option value="BCA">MCA</option>

								<option value="BCA">B.A</option>

							
								<option value="BCA">M.A</option>

								

							</select>

						</td>
						

					</tr>

					<tr>

						<td style="font-size:20px">


							ENTER ROLL-NO


						</td>

						<td>
						

						<input class="student-info-btn" type="text"


						 name="roll_no" placeholder="enter your roll-no">



						</td>



					</tr>	



					<tr >	


						<td >


							<input style ="width: 150px;height: 45px;font-size:20px" type="submit" name="submit" 

							value="show_info">


							
						</td>	


					</tr>
				

				</table>

			</center>	
				

		</form>

	</div>



	</body>
	

</html>




<!------------------ PHP CODE FOR  STUDENT INFORMATION -------------------->


<?php

//connetion with database

	include('../php/dbconn.php');
	

	
	if(isset($_POST['submit']))
		

	{


		$standard=$_POST['std'];


		$roll_no=$_POST['roll_no'];


// include function page---
		

		include('function.php');



/*================ how to make function ===================*/


		showdetails($standard,$roll_no);

	}





?>















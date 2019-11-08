<?php

	include('dbconn.php');


	session_start();


	if(isset($_SESSION['uid']))


	{


	header('location:../admin/admindash.php');

	}



?>




<html>

	<head>

		<title>

			
			admin-login


		</title>



		<link rel="stylesheet" type="text/css" href="..\css\style.css">


	</head>


	<body style="background-image: url(../image/making-a-budget-tracking-finances.jpg);background-size: cover">


		<h1 style="margin-top: 15px;color: white">


			<center >


				ADMIN-LOGIN


			</center>


		</h1>


		<form action=""  method="post">


			<center>



			<table border="2" style="margin-top: 100px;background: rgba(255,225,225,.4);box-shadow:  0 10px 15px; width: 45%; opacity: 1;height: 35%">



				<tr>

					<td class="row-data">
						

						USERNAME

					</td>

					<td>
						
						<input  class="input-data" type="text" name="username" placeholder="enter your name" required>

					</td>

				</tr>


				<tr>
					
					<td  class="row-data">

						PASSWORD

					</td>

					<td>
						 
						<input  class="input-data" type="password" name="password" placeholder="enter your password" required>
					</td>
				</tr>

				<tr>

					<td>
						
						<input  class="login-btn" type="submit" name="login"  value="Login">

					</td>
					
				</tr>

				

			</table>
			

		</form>

	</center>

	</body>
	

</html>






<?php


	if(isset($_POST['login']))


	{

			$username=$_POST['username'];
			$password=$_POST['password'];


			$query="select * from admin where username='$username' and password='$password'";

			$data=mysqli_query($con,$query);


			$total=mysqli_num_rows($data);


			if($total==1)

			{


//fetch id number


				$contain=mysqli_fetch_assoc($data);


				$id=$contain['id'];



//session is start ---				

				


				$_SESSION['uid']=$id;



//redirect that means, its reached on previous page (path);----



				header('location:http://localhost\sms\admin\admindash.php');



			}


			else


			{
				

?>	


<!-------here, start javascript for warning msg ----->



				<script>


					alert('Username or Password not match !!');



//window.open is using for redirect




					window.open('login_form.php','_self');


				</script>



			<?php



			}	
	


	}




?>

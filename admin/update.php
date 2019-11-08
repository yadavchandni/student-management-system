<?php


include('../php/dbconn.php');

error_reporting(0);


session_start();


		if(isset($_SESSION['uid']))


		{

			echo "";

		}

		else

		{

			header('location:../login_form.php');


		}	




?>




<?php



include('titlehead.php');



?>




<html>

<body>

<center>

	<form action="" method="get">


		<table border="2" style="width: 55%; height: 50%;margin-top: 100px;background: rgba(255,255,255,.6);box-shadow:  0 10px 15px; width: 50%; opacity: 1;">

			<tr>
				
				<td class="row">


					Id


				</td>


				<td>
					
					<input class="input-btn" type="text" name="id"

					  value="<?php echo $_GET['id']; ?> "/>

				
				</td>

			</tr>






			
			<tr>
				
				<td class="row">


					Roll-No


				</td>


				<td>
					
					<input class="input-btn" type="text" name="roll_no"

					  value="<?php echo $_GET['rollno']; ?> "/>

				
				</td>

			</tr>





			<tr>
				
				<td class="row">


					Full-Name


				</td>


				<td>


					
					<input class="input-btn" type="text" name="name"

					  value="<?php echo $_GET['name']; ?> "/>


				</td>


			</tr>





			<tr>
				
				<td class="row">

					City


				</td>


				<td>

					
					<input class="input-btn" type="text" name="city" 

					 value="<?php echo $_GET['city']; ?> "/>


				</td>



			</tr>





			<tr>
				
				<td class="row">

					Parent_Contact_No

				</td>

				<td>
					
					<input class="input-btn" type="" name="parent_contact_no" 

					value="<?php echo $_GET['pcon']; ?> "/>

				</td>



			</tr>




			<tr>
				
				<td class="row">

					Standard

					
				</td>


				<td>
					
					<input class="input-btn" type="varchar" name="standard" 

					value="<?php echo $_GET['standard'] ; ?>" / >

				</td>



			</tr>




			<tr>
				
				<td class="row">

					Image

				</td>


				<td>
					
					<input class="image-btn" type="file" name="image"

					 value="<?php echo $_GET['image'] ; ?>"/>

				</td>


			</tr>
	



			<tr>
					
				<td colspan="2">
						
					<input class="submit-btn" type="submit" name="submit" value="update">

				</td>


			</tr>


				






		</table>
	

	</form>



</center>


</div>






<?php

	//include('../php/dbconn.php');



	if (isset($_GET['submit'])) 



	{	

		$id=$_GET['id'];


		$roll_no=$_GET['roll_no'];


		$name=$_GET['name'];


		$city=$_GET['city'];


		$parent_contact_no=$_GET['parent_contact_no'];


		$standard=$_GET['standard'];



		$image=$_GET['image'];


		$query="UPDATE student SET id='$id', name='$name',
		

		 city='$city', parent_contact_no='$parent_contact_no'  , standard='$standard' ,



		 image='$image' WHERE roll_no='$roll_no' ";


		$data=mysqli_query($con,$query);



		if($data==true)

		{

			?>


			<script>


				alert('data update successfully !!!');


			</script>


		<?php	


		}

		else{


			echo "error";


		}


	}



	else{

		echo "<font color='blue'>click on update button to save the change : ";
	}


	

?>







</body>



</html>


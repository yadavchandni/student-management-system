<?php


include('../php/dbconn.php');


//session will be start-

session_start();


		if(isset($_SESSION['uid']))


		{

			echo "";

		}

		else

		{


// redirect login page 


			header('location:../login_form.php');


		}	




?>




<?php



include('titlehead.php');

?>

<center>

	<form action="" method="post" class="addstudent_body_bg">


		<table border="2" style="width: 55%; height: 50%;margin-top: 100px;background: rgba(255,255,255,.6);box-shadow:  0 10px 15px; width: 50%; opacity: 1;padding-bottom: 30px;border-radius: 5px;width: 60%;text-align: center;">

			
			<tr>
				
				<td class="row">


					Roll-No


				</td>


				<td>
					
					<input class="input-btn" type="text" name="roll_no"

					 placeholder="Enter Your Roll-No" required>

				
				</td>

			</tr>





			<tr>
				
				<td class="row">


					Full-Name


				</td>


				<td>


					
					<input class="input-btn" type="text" name="name"

					 placeholder="Enter Your Name" required>


				</td>


			</tr>





			<tr>
				
				<td class="row">

					City


				</td>


				<td>

					
					<input class="input-btn" type="text" name="city" 

					placeholder="Enter Your City" required>


				</td>



			</tr>





			<tr>
				
				<td class="row">

					Parent_Contact_No

				</td>

				<td>
					
					<input class="input-btn" type="number" name="pcon" 

					placeholder="Enter Your Parent_Contact_No" required>

				</td>



			</tr>




			<tr>
				
				<td class="row">

					Standard

					
				</td>


				<td>
					
					<input class="input-btn" type="varchar" name="std" 

					placeholder="enter your Standard" required>

				</td>



			</tr>




			<tr>
				
				<td class="row">

					Image

				</td>


				<td>
					
					<input class="image-btn" type="file" name="image"

					 placeholder="Enter Your Image" required>

				</td>


			</tr>
	



			<tr>
					
				<td colspan="2">
						
					<input class="submit-btn" type="submit" name="submit" value="submit">

				</td>


			</tr>


				






		</table>
	

	</form>



</center>


</div>



</html>


<?php



	if (isset($_POST['submit'])) 

	{
		

		$roll_no=$_POST['roll_no'];
		

		$name=$_POST['name'];


		$city=$_POST['city'];


		$pcon=$_POST['pcon'];


		$std=$_POST['std'];
 

		//$imagename=$_FILES['image'];


		

		//$tempname=$_FILES['image']['tmp_name'];



// move_upload_file is using uploading file and store the image in   new folder.


	    
		


		

			$query = "INSERT INTO `student` (`roll_no` , `name`, `city`, 


			`parent_contact_no`, `standard`, `image`) VALUES ('$roll_no',


			 '$name', '$city', '$pcon', '$std','')";



			$data=mysqli_query($con,$query);




		if($data==true)

		{

			?>

<!------------------- JS are not working inside phpCode ----------------------------------------------->


			<script>


				alert('data insert successfully !!!');


			</script>


		<?php	


		}

		else{


			echo "error";


		}

		


		
	}





?>










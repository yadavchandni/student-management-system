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


		<table border="2" style="width: 55%; height: 50%;margin-top: 100px;">

			
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
 
// for uploading image --

		$file=$_FILES['image'];



		$file_name=$_FILES['image']['name'];


		$file_tempname=$_FILES['image']['tmp_name'];



		$file_type=$_FILES['image']['type'];


		$file_size=$_FILES['image']['size'];


		$file_error=$_FILES['image']['error'];


		$fileext=explode('.',$file_name);


		$file_actually_ext=strtolower(end($fileext));

		$allowed= array('jpg','jpeg','png','pdf');

		if(in_array($file_actually_ext,$allowed))

		{
			if ($file_error===0) {

				if ($file_size<1000000) {


					$file_name_new=uniqid('',true).".".$file_actually_ext;

					$filedestination='dataimg/'.$filename_new;


					move_uploaded_file($file_tempname,$filedestination);



					header("location:addstudent.php?uploadsuccess");
					


				}

				else{

					echo "your file is too big ";
				}
				# code...
			}

			else{


				echo"there was an error uploading your files ";
			}


		}

		else{
			echo"you cant upload file of this type";
		}








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










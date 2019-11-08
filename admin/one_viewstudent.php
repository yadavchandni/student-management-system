






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

	include('titlehead.php');


?>



<form action="" method="post">


	<input type="number" name="standard" placeholder="enter your standard">

	<input type="text" name="username" placeholder="enter your username">
	
	<input type="submit" name="submit" value="submit" >
	

</form>



<?php
	


	
		

	$username=$_POST['username'];
	

	$standard=$_POST['standard'];	


	$query="SELECT * FROM student WHERE standard='$standard' AND username='$username'" ;


	$data=mysqli_query($con,$query);


	$total=mysqli_num_rows($data);


	//echo	$total;


	$result=mysqli_fetch_assoc($data);



	//echo $result['roll_no']." ".$result['name'];



		if (isset($_POST['submit']))

	 {
		

?>



		<table border="2"  style="margin-top: 0px;background: rgba(255,255,255,.6);box-shadow:  0 10px 15px; width: 50%; opacity: 1;width: 99%;">


			<tr>

				<th >ID</th>


				<th>ROLL-NO</th>


					<th>NAME</th>


				<th>CITY</th>



				<th style="width: 138px;">PARENT-CONTACT-NO</th>


				<th style="width: 138px;">STANDARD</th>

				<th style="width: 145px;">IMAGE</th>


				<th style="width: 120px;">EDIT</th>


			</tr>

			

				<?php



					if($result=$standard)
				
					{
					
					

					 	echo "<br/>


						<tr>

							<td>".$result['id']."</td>


							<td>".$result['roll_no']."</td>


							<td>".$result['name']."</td>


							<td>".$result['city']."</td>


							<td>".$result['parent_contact_no']."</td>



							<td>".$result['standard']."</td>



							<td>".$result['image']."</td>


							<td>".$result['edit']."</td>


						</tr>";
						
				}


		}


		else

		{


			echo "record not found";


		}



	?>

</table>
		
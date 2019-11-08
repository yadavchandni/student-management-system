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









<?php



	$query="SELECT * FROM student " ;


	$data=mysqli_query($con,$query);


	$total=mysqli_num_rows($data);



	//$result=mysqli_fetch_assoc($data);



	//echo $result['roll_no']." ".$result['name'];



		if($total!=0)


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

<!--------------

				<th style="width: 120px;">EDIT</th>

				<th style="width: 120px;">DELETE</th>


--------------->


			</tr>

			

				<?php



				while ($result=mysqli_fetch_assoc($data))

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



							


						</tr>";
						
				}


		}


		else

		{


			echo "record not found";


		}



	?>

	</table>


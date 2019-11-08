<?php


	include('../php/dbconn.php');


	//Error Reporting are using only for one purpose that is don't display unwanted notice.


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


//selection query will be starts-


	$query="SELECT * FROM student " ;


	$data=mysqli_query($con,$query);


	$total=mysqli_num_rows($data);



	//$result=mysqli_fetch_assoc($data);



	//echo $result['roll_no']." ".$result['name'];



		if($total!=0)


		{

?>



		<table border="2px solid black"  style="margin-top: 0px;background: rgba(255,255,255,.6);box-shadow:  0 10px 15px; width: 50%; opacity: 1;width: 99%;">


			<tr>

				<th >ID</th>


				<th>ROLL-NO</th>


					<th>NAME</th>


				<th>CITY</th>



				<th style="width: 138px;">PARENT-CONTACT-NO</th>


				<th style="width: 138px;">STANDARD</th>

				<th style="width: 145px;">IMAGE</th>


				<th Colspan="2" style="width: 120px;">OPRATIONS</th>


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


							<td>



								<a href='update.php ? id = $result[id] & 


								 rollno=$result[roll_no]&


								 name=$result[name]&


								 city=$result[city]&


								 pcon=$result[parent_contact_no]&


								 standard=$result[standard] &

								 image=$result[image]'> 



								EDIT </a>


							</td>

							


						</tr>";
						
				}


		}


		else

		{


			echo "record not found";


		}



	?>

	</table>



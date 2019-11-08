<?php

	function showdetails($standard,$roll_no)

	{


		include('../php/dbconn.php');


		$sql="SELECT * FROM `student` WHERE roll_no='$roll_no' AND standard='$standard'";

		$run=mysqli_query($con,$sql);


		if(mysqli_num_rows($run)>0)

		{

			$data=mysqli_fetch_assoc($run);


			?>

		<center>

			<table border="2" width="70%" height="50%">
				
				<tr>
					
					<th colspan="3" h>


						STUDENT-DETAILS
						

					</th>

				</tr>


				<tr>
					
					<td rowspan="5">

						
						<img src="dataimg/<?php echo $data['image']; ?>" 


						style="max-height: : 150px; max-width: 220px;padding-left: 10px">


						<th>
							
							ROLL-NO


						</th>


						<td>
							
							<?php echo $data['roll_no']; ?>

						</td>


					</tr>


					<tr>
							
							<th>
							
								NAME

							</th>


							<td>
							
								<?php echo $data['name']; ?>

							</td>




						</tr>



						<tr>
							
							<th>
							
								CITY
							</th>


							<td>
							
								<?php echo $data['city']; ?>

							</td>




						</tr>


						<tr>
							
							<th>
							
								PARENTS_CONTACT NUMBER

							</th>


							<td>
							
								<?php echo $data['parent_contact_no']; ?>

							</td>




						</tr>



						<tr>
							
							<th>
							
								STANDARD

							</th>


							<td>
							
								<?php echo $data['standard']; ?>

							</td>




						</tr>



			</table>


		</center>


			<?php


		}


		else

		{


		echo "<script>

				alert('no student record found')


			</script>";

		}


	}






?>
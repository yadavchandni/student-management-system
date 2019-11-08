
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

	//include('../php/dbconn.php');



		


		$roll_no=$_GET['roll_no'];


		$query="DELETE FROM student WHERE roll_no='$roll_no'";


		$data=mysqli_query($con,$query);


		if($data==true)

		{


			?>

			<script>
				
				alert('data deleted succsessfully');

				


			</script>


			

			<?php


			header('location:deletestudent.php');



		}




		else{

			echo "<font color='red'>record has not been deleted";
		}





	






?>
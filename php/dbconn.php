<?php


	$dbserver='localhost';

	$dbusername='root';

	$dbpassword='';

	$dbname='student_management_system';

	
	$con=mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
	
	if($con==false)
		{
			echo 'connection is failed';

		}

	



?>
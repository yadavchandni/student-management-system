<?php


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

include('header.php');

?>

	
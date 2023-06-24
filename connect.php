<?php
	// date_default_timezone_set('Asia/Manila');
	// $cur_year = date('Y');//get current year
	$conn  = mysqli_connect('localhost','root','','sale');
	if(mysqli_connect_errno())
	{
		echo 'Database Connection Error';
	}

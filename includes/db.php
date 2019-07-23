<?php
	$con = mysqli_connect("localhost","root","","bookings"); 
						/*("localhost","root","password/blank if no password,"database name")*/
										
	if(mysqli_connect_errno()){
		echo "Failed to connect".mysqli_connect_error();
	
	}


?>
<?php

$con=mysqli_connect("localhost","root","","internship");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL:".
	mysqli_connect_errno();
}
?>
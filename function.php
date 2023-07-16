

<!-- Function of the User Panel -->

<?php
 function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","travelling");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost","root","","travelling");
?>




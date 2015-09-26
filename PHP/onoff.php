<?php
	include "connect.php";
	$r = $_GET["on"];
	$time = time();
	if(strlen($r)>0)
	{
		$sql = "INSERT INTO onoff VALUES('$r', '$time')";
		if ($conn->query($sql) === TRUE)
		{
			echo "Success!";
		}
	}
	$conn->close();
?>
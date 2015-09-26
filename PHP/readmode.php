<?php
	include "connect.php";
	$sql = "SELECT mode FROM onoff ORDER BY `time` DESC";

	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo $row["mode"];
	$conn->close();
?>
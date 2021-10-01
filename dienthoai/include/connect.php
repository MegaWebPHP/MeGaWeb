<?php
		$mysqli = new mysqli("localhost","root","","dienthoai");

		// Check connection
		if ($mysqli->connect_errno) {
		echo "K ket noi duoc MySQL: " . $mysqli->connect_error;
		exit();
		}
?>

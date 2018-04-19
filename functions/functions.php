<?php
	$mysqli= false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost","root","","phpbase");
		$mysqli->query("SET NAMSES 'utf-8'");
	}
	
	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}
	
	function getProduct () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `product` ORDER BY `id`");
		closeDB();
			return resultToArray ($result);
	}
	
	function resultToArray ($result){
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[]=$row;
		return $array;
	}
?>
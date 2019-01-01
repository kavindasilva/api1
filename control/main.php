<?php

require_once __DIR__."/read.php";

if(isset($_GET['read'])){
	$jsonRes= (new ControlRead);
	$jsonRes= (new ControlRead)->readData();
	header("Content-Type: application/json");
	echo($jsonRes); //correct output
	//eCho "<hr>";
	//print_r(json_decode($jsonRes) );

	//$shOut=shell_exec("command");
	//echo "string";
}

if(isset($_POST["get"])){
	$jsonRes= (new ControlRead)->readData();
	echo($jsonRes);
}


?>
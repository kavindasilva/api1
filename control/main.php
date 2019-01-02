<?php

require_once __DIR__."/read.php";

if(isset($_GET['read'])){
	$jsonRes= (new ControlRead);
	$jsonRes= (new ControlRead)->readData();
	header("Content-Type: application/json");

	//$jsonRes=json_decode($jsonRes, true); print_r($jsonRes);
	$jsonRes["reqType"]="GET";
	$jsonRes["reqtime"]=date("m:d h:i:s");

	header("Content-Type: application/json");
	$jsonRes=json_encode($jsonRes);

	echo($jsonRes); //correct output
	//eCho "<hr>";
	//print_r(json_decode($jsonRes) );

	//$shOut=shell_exec("command");
	//echo "string";
}

if(isset($_POST["get"])){
	$jsonRes= (new ControlRead)->readData();
	$jsonRes["reqType"]="POST";
	$jsonRes["reqtime"]=date("m:d h:i:s");
	header("Content-Type: application/json");
	$jsonRes=json_encode($jsonRes);
	echo($jsonRes);
}


?>
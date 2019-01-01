<?php

//new dbcon(); //working
/**
* 	DB connection
*/
class dbcon
{
	private $host="127.0.0.1";
	private $user="ks";
	private $pass="1";
	private $db="k1";

	public function __construct()
	{
		# code...
		//$conn=mysqli_connect($host, $user, $pass, $db);
		//$conn= new mysqli($this->host, $user, $pass, $db);
		$conn= new mysqli($this->host, $this->user, $this->pass, $this->db);

		if($conn->connect_error){
			echo "DB Connect error: <br/>";
			echo $conn->connect_error();
			exit;
		}
	}


}


?>
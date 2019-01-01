
<?php

require_once __DIR__."/entity.php";
/**
	This file is made with OOP concepts. Entity sub class (model) for accessing DB
*/


class Read extends Entity
{
	//public $conn=null;
	public $result=null;

	function __construct()
	{
		parent::__construct();
		//print_r($this->conn); // working, since parent attrubute is public

		//print_r($this->conn);
	}

	public function readTbl(){
		$resObj= array();
		//$sql="SELECT * from kk; ";
		$sql="SELECT * from enc1; ";
		//echo __FUNCTION__;
		$this->result=$this->conn->query($sql);

		if(!$this->result){
			echo __CLASS__." : ",__FUNCTION__," error<br/>";
			echo $this->conn->error; // error printing //works
			$resObj["result"]="false";
			$resObj["error"]["message"]=$this->conn->error;
			//return $resObj;
			//return null;
		}
		else{
			$i=0;
			$resObj["result"]="true";
			/*while($row=$this->result->fetch_array(MYSQLI_ASSOC)){ // working
				print_r($row);
			}*/
			//$resObj['sqlRes']=$this->result; //to return sqli result

			while($row=$this->result->fetch_array(MYSQLI_ASSOC)){ // working
				//print_r($row);
				$resObj["data"][$i]=$row;
				$i++;
			}/**/
		}

		return $resObj;

	}
}


//$xc=new Read();
//$xc->readTbl();


?>
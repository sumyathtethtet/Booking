<?php 

/**
 * 
 */
class DBController 
{
	private $host="localhost";
	private $user="root";
	private $password="";
	private $datebase="booking";
	function __construct()
	{
		$conn=$this->connectDB();
		if(!empty(($conn)){
			$this->selectDB($conn);
		}
	}
	function connectDB(){
		$conn=msql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	function selectDB($conn){
		mysql_select_db($this->database,$conn);
	}
	function runQuery($query){
		$result=mysql_query($query);
		while ($row=mysal_fetch_assoc($result)) {
			$resultset[]=$row;
		}
		if(!empty($resultset))
			return $resultset;

	}
	function numRows($query){
		$result=mysql_query($query);
		$rowcount=mysql_num_rows($result);
		return $rowcount;
	}
}


 ?>
<?php
function db_connect(){
	//definim conectunea statica pt a avita repetari inutile ale conexiuni
	static $connection;
	
	//try and connect to the database , if a connection has not been established yet
	
	if(!isset($connection)) {
	
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "phones";

		$connection = mysqli_connect($host,$username,$password,$dbname);

	}
	
	if($connection === false){
		return mysqli_connect_error();
	}

	return $connection;
}
 function db_query($query){
	
	$connection = db_connect();

	$result = mysqli_query($connection,$query);
    
	return $result;
  }
 
 $result = db_query("SELECT * FROM mobile_phones");
 
 
 if($result === false){
	 //handle failure
	 die("query error .. !");
		 
 } else {
	 //fetch all the rows in an array
	 $rows = array();
	 while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
		
	 }
 }
 
 function db_select ($query) {
	$rows = array();
	$result=db_query($query);
	
	if($result === false){
		return false;
	}
	
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
 
 }
 
 //////////////////////
 
 $rows = db_select("SELECT * FROM mobile_phones");
 
 
 if($rows === false){
	 //handle failure
	 die("query error .. !");
		 
 } else {
	 //fetch all the rows in an array
	 foreach($rows as $row){
		echo "printam row: <br>";
        print_r($row); 
		 foreach ($row as $key=> $value){
			 echo ucfirst($key) . ":" . $value . "<br>";
		 }
		 echo "----------------------<br>";
	 }
		
	 }
 
 
 
?>
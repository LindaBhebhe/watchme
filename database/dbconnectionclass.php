<?php
	/*
	*This is a database connection class
	*/
	/*
	*Include database credentials
	*/
	require_once("dbcred.php");
	
	/*
	*The class
	*/
	class dbconnection{
		/*
		*properties
		*/
		public $dbconnector;
		public $dbresults;
		
		/*
		*Database connection method
		*@return return True or False
		*/
		public function connection(){
			//Assign the connection to dbconnector method
			$this->dbconnector = mysqli_connect(DBHOST,DBUSERNAME,DBPASS,DBNAME);
			if(mysqli_connect_errno()){
				return false;
			}else{
				return true;
			}
		}
		
		/*
		*Database query method
		*@param sql to be executed
		*@return return True or False
		*/
		function query($sql){
			//check if connection works
			if(!$this->connection()){
				return false;
			}else{
				//Run the query
				$this->dbresults = mysqli_query($this->dbconnector,$sql);
				//check if record returned
				if($this->dbresults==false){
					//return !($this->dbresults==false)
					return false;					
				}else{
					return true;					
				}
			}			
		}
		
		/*
		*Database fetch method
		*@return return results
		*/
		function fetch(){
			//check if results has content
			if($this->dbresults == false){
				return false;
			}else{
				//return results
				return mysqli_fetch_assoc($this->dbresults);
			}
		}
		
		/*
		*Database get number of rows method
		*@return return number of rows
		*/
		function getrows(){
			//check if results has a number of rows
			if($this->dbresults == false){
				return false;
			}else{
				//return results
				return mysqli_num_rows($this->dbresults);
			}
		}
		
		//Method for sql injection
		public function checkforsqlinjection($sql,...$values){
			$getarr=array();
			 //check if connection works
			if(!$this->connection()){
				return false;
			}else{
				foreach ($values as $value) {
					$getarr[]= mysqli_real_escape_string($this->dbconnector,"'$value'");
				} 
                 $statement=vsprintf($sql,array_values($getarr));
				 $statement = str_replace('\\','',$statement);
				 var_dump($statement);
				//check if record returned
				//Run the query
				
				$result = mysqli_query($this->dbconnector,$statement);
				var_dump($result);
				if($this->dbresults==false){
					//return !($this->dbresults==false)
					return false;					
				}else{
					return true;					
				}
		    }
		}
		
		//Method for prepared statement
		function preparedstatementquery($sql,$datatype,...$values){
			 //check if connection works
			if(!$this->connection()){
				return false;
			}else{
				// prepare the statement and bind
				$result = $this->dbconnector->prepare($sql);
				$result-> bind_param($datatype, ...$values);
				//check if record returned
				if($result==false){
					//return !($this->dbresults==false)
					return false;					
				}else{
					$result->execute();
					return true;					
				}
			}
		}
		
		
	}
	
	
?>
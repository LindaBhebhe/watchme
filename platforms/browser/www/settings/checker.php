<?php
	//session start for the session
	session_start();
	function verifyuserlogin(){
		//Check for login
		if(isset($_SESSION["userid"]) && !empty($_SESSION["userid"])){
			//valid
			//check for user permission
		}else{
			//not valid
			header("Location: ../login/index.php");
		}
	}
	
	//Get user specific template
	function getuserheader(){
		//check user permission
		if($_SESSION['per_id']==2){
			//include the right header
			require_once($_SERVER["DOCUMENT_ROOT"]. "/finalprojectweb/layout/whistleblower.php");
		}else if($_SESSION['per_id']==1){
			//include the right header
			require_once($_SERVER["DOCUMENT_ROOT"]. "/finalprojectweb7/layout/adminheader.php");
		}
		
		
	}
?>
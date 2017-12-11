<?php
header("Access-Control-Allow-Origin: *");

if(isset($_REQUEST['username'])){
	include "../database/dbconnectionclass.php";

	$checkuser = new dbconnection;
	if($checkuser->connection()){
		$username= $_REQUEST["username"];
		$password= $_REQUEST["passwd"];	

		$sql ="SELECT * FROM users WHERE uname='$username'";

		$result=$checkuser->query($sql);
		if($result){
			$row = $checkuser->fetch();
			$username=$row['uname'];
			$passwd = $row['passwd'];
			if(password_verify($password, $passwd)){		 
				echo "successful";	
			}
			else {
				echo "error has occured";
			}	
		}
		else{
	    	echo "string ";
		}
	}
	else{
		echo "string 66";
	}
}
	?>

/*This is a sample javascript validation*/ 
function validateregistration(){	
	//These are the commands for getting the elements from the html file
	var fname = document.getElementById("fnm");
	var lname = document.getElementById("lnm");
	var uname = document.getElementById("unm");
	var email = document.getElementById("eml");
	var age = document.getElementById("age");
	var pnumber = document.getElementById("pnm");
	var uerror = document.getElementById("uerror");
	var perror = document.getElementById("perror");
	var emerror = document.getElementById("emerror");
	var ferror = document.getElementById("ferror");
	var lerror = document.getElementById("lerror");
	var gerror = document.getElementById("gerror");
	var merror = document.getElementById("merror");
	//validating username
	if(uname.value==""){
		uerror.innerHTML = "Please enter your username";
	}else{
		if(!preg_match('/^[a-zA-Z ]+$/', uname)){
			uerror.innerHTML = "Enter only alphabetical letters";
		}		
	}
	//validating firstname
	if(fname.value==""){
		ferror.innerHTML = "Please enter your first name";
	}else{
		if(!preg_match('/^[a-zA-Z ]+$/', fname)){
			ferror.innerHTML = "Enter only alphabetical letters";
		}		
	}
	//validating lastname
	 if(lname.value==""){
		lerror.innerHTML = "Please enter your last name";
	}else{
		if(!preg_match('/^[a-zA-Z ]+$/', lname)){
			lerror.innerHTML = "Enter only alphabetical letters";
		}		
	}
	//validating email
	if(email.value==""){
		emerror.innerHTML = "Enter your email address";
	}else{
	  if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]??\w+)*(\.\w{2,3})+$/', email)){
			emerror.innerHTML = "Enter your email in the correct format";
	  }		
	}
	//validating age
	 if(lname.value==""){
		lerror.innerHTML = "Please enter your age";	
	}
	//validating phonenumber
	 if(lname.value==""){
		lerror.innerHTML = "Please enter your phonenumber";
	}
		
}


function validatelogin(){
	var uname = document.getElementById("unme");
	var password = document.getElementById("passwd");
	var usererror = document.getElementById("usererror");
	var passerror = document.getElementById("passerror");
	
	if(uname.value==""){
		usererror.innerHTML = "Enter your username";
	}	
	if(password.value==""){
		passerror.innerHTML = "Enter your password";
	}
}


	
	
function validatedata(){
	
 	var username = document.mylogin.username.value;
	var password = document.mylogin.password.value ;
    

    if(username == "" && password == ""){
    	alert(" You Must enter Username and Password for login !!") ;
    	document.getElementById('username').focus() ;
    	return false ;
    }

	if(username == ''){
		alert("UserName cann't be empty !!") ;
		document.getElementById('username').focus() ;
		return false ;

	}

	if(password == ''){
		alert("Password Cann't be empty !! ");
		document.getElementById('password').focus() ;
		return false ;
	}

	return true ;

	
}
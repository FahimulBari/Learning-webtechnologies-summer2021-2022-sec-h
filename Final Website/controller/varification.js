	let IsUsernameNull = true;
	let IsPasswordNull = true;
	let IsInfoMatched = false;
	let username = '';
	let password = '';

	function LoginVarification() {

		if(IsUsernameNull || IsPasswordNull){UsernameNullCheck(); PasswordNullCheck(); }
		else{ CheckGivenValues(); }
		
		if(!IsInfoMatched) document.getElementById('password-warning').innerHTML = 'Username or password incorrect!';
		else document.getElementById('password-warning').innerHTML ='' ; 

		return IsInfoMatched;
	}

	function UsernameNullCheck() {
		let element = document.getElementById('username');
		let warning = document.getElementById('username-warning');

		if(element.value == ""){
			warning.innerHTML = 'Give value';
			IsUsernameNull = true;
		}else{
			warning.innerHTML = '';
			username = element.value;
			IsUsernameNull = false;
		}

		CheckGivenValues();
	}

	function PasswordNullCheck() {
		let element = document.getElementById('password');
		let warning = document.getElementById('password-warning');

		if(element.value == ""){
			warning.innerHTML = 'Give value';
			IsPasswordNull = true;
		}else{
			warning.innerHTML = '';
			password = element.value;
			IsPasswordNull = false;
		}

		CheckGivenValues();
	}

	function CheckGivenValues() {
		if(!IsUsernameNull && !IsPasswordNull){
			let xhttp = new XMLHttpRequest();
			xhttp.open('POST','../model/varification.php',true);
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200){
	        		if(this.responseText){
						IsInfoMatched = true;	 
		      		}else{				 
						IsInfoMatched = false;	   		
		      		}
	      		}
			}

	        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    
	        xhttp.send('username='+username+'&password='+password);
		}
	}
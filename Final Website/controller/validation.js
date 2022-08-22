	let IsUsernameValid = false; 
	let IsPasswordValid = false;
	let IsUsernameExist = false;  

	function UsernameValidation() {
		let element = document.getElementById('username');
		let warning = document.getElementById('username-warning');

		if(element.value == ""){
			warning.innerHTML = 'Give value';
			IsUsernameValid = false;
		}else if(element.value.length < 4){
			warning.innerHTML = 'Atleast 4 charecter long';
			IsUsernameValid = false;
		}else{
			warning.innerHTML = '';
			IsUsernameValid = true;
		}

		if( IsUsernameValid){ UsernameExist(); }
		else { IsUsernameExist = true; }
	}

	function UsernameExist(){

		let element = document.getElementById('username');
		let warning = document.getElementById('username-warning');
        let xhttp = new XMLHttpRequest();

        xhttp.open('POST', 'model/validation.php', true);
        xhttp.onreadystatechange = function() {
    		if(this.readyState == 4 && this.status == 200){

	        	if(this.responseText){
	      			warning.innerHTML = 'Username already exist';
					IsUsernameExist = true;	 
		      	}else{
					IsUsernameExist = false;	      		
		      	}
	      }
        }

        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    
        xhttp.send('username='+element.value);
    }
	

	function PasswordValidation() {
		let element = document.getElementById('password');
		let warning = document.getElementById('password-warning');

		if(element.value == ""){
			warning.innerHTML = 'Give value';
			IsPasswordValid = false; 			
		}else if(element.value.length < 4){
			warning.innerHTML = 'Atleast 4 charecter long';
			IsPasswordValid = false; 		
		}else if(element.value.match(/^[0-9]+$/) != null){
			warning.innerHTML = 'Atleast one alphabet';
			IsPasswordValid = false; 	
		}else if(element.value.match(/\d/) == null){
			warning.innerHTML = 'Atleast one number';
			IsPasswordValid = false; 		
		}else{
			warning.innerHTML = '';
			IsPasswordValid = true; 
		}
	}

	function ValidationChecker() {
		UsernameValidation();
		PasswordValidation();

		return !IsUsernameExist && IsUsernameValid && IsPasswordValid; 
	}
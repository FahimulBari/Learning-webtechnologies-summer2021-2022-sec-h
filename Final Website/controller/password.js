	let IsOldNull = true;
	let PasswordIsNotValid = true;
	let IsDone = false;

	function PasswordChange() {

		if(IsOldNull || PasswordIsNotValid) { OldPaswordNullCheck(); NewPaswordNullCheck(); }
		else{
			let oldPassword = document.getElementById('old-password').value;
			let newPassword = document.getElementById('new-password').value;
			if(password == oldPassword){
				if(oldPassword == newPassword){
					document.getElementById('new-password-warning').innerHTML = "Can not use same password";
				}else{
					IsDone = true;
				}
			}else{
				document.getElementById('old-password-warning').innerHTML = "Wrong password";
			}
		}

		return IsDone;
	}

	function OldPaswordNullCheck() {
		let element = document.getElementById('old-password');
		let warning = document.getElementById('old-password-warning');

		if(element.value == ""){
			warning.innerHTML = 'Give value';
			IsOldNull = true;
		}else{
			warning.innerHTML = '';
			username = element.value;
			IsOldNull = false;
		}
	}

	function NewPaswordNullCheck() {
		let element = document.getElementById('new-password');
		let warning = document.getElementById('new-password-warning');


		if(element.value == ""){
			warning.innerHTML = 'Give value';
			PasswordIsNotValid = true; 			
		}else if(element.value.length < 4){
			warning.innerHTML = 'Atleast 4 charecter long';
			PasswordIsNotValid = true; 		
		}else if(element.value.match(/^[0-9]+$/) != null){
			warning.innerHTML = 'Atleast one alphabet';
			PasswordIsNotValid = true; 	
		}else if(element.value.match(/\d/) == null){
			warning.innerHTML = 'Atleast one number';
			PasswordIsNotValid = true; 		
		}else{
			warning.innerHTML = '';
			PasswordIsNotValid = false; 
		}
	}

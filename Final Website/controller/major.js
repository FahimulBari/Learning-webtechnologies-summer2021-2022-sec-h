	function majorDeclare(majorId) {
		let element = document.getElementById(majorId);
		let xhttp = new XMLHttpRequest();

        xhttp.open('POST', '../model/update-major.php', true);
        xhttp.onreadystatechange = function() {
    		if(this.readyState == 4 && this.status == 200){
				let major_empty = document.getElementById('major-empty');
				let major_declared = document.getElementById('major-declared');		
				let major = document.getElementById('major');		
				major_empty.classList.add('disable');
				major_declared.classList.remove('disable');
				major.innerHTML = this.responseText;
	      	}
        }

        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    
        xhttp.send('major='+element.innerHTML);

        
	}

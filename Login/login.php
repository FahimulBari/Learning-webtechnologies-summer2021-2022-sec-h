<?php

		$username = $_POST['username'];
		$email = $_POST['email'];
		$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
		$dob = isset($_POST['dob']) ? $_POST['dob'] : ""; 
		$degree = isset($_POST['degree']) ? $_POST['degree'] : ""; 


		if(empty($username) 
			|| !ctype_alpha($username) 
			|| strlen($username) < 2 
			|| !ctype_alpha($username[0]) )
		{
		 echo "Name is not in correct form <br>";
		}
		else{
		 echo "Successful <br>";
		}

		if(empty($email) || !strpos($email,"@") || !strpos($email,".com")){
		 echo "Write the email correctly <br>";
		}
		else{
			echo "Successful <br>";
		}

        if(empty($gender)) echo "Gender is null <br>";
        else echo "Successful <br>";

        if(empty($dob)) echo "Date of birth is null <br>";
        else echo "Successful <br>";

        if(empty($degree)) echo "Degree is null <br>";
        else echo "Successful <br>";
?>
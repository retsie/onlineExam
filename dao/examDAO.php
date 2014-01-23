<?php
class ExamDAO{
	public function addUser($fname,$lname,$mname,
							$email,$username,$pass){
	global $db;

	$res = $db->query("SELECT * FROM users WHERE  
						emailadd IN ('$email')");	

	if($res->num_rows >0){
		echo "Email" ." ". $email ." ". "already taken\n"."";
	}else{
	    $sql = "INSERT INTO `examination`.`users` 
	    				   (`users_id`, `fname`, 
	    				   	`mname`, `lname`, 
	    		 			`emailadd`, `username`, `pass`) 
	     	  VALUES (NULL, '$fname', '$mname', 
	     	  				'$lname', '$email', 
	     	  				'$username', '$pass')";

			$result = $db->query($sql);

			if($sql){
				echo "success";
				return $result;

			}else{
				echo "failed ";
			}		
		}
	}

	public function logUser($username, $password){
		global $db;

		$sql="SELECT * FROM users WHERE 
						username = '{$username}' AND 
						pass = '{$password}'";
			$result = $db->query($sql);

			if($result->num_rows > 0){
				header("location:../exampage");
			}else{
				echo "login failed";
			}
			
	}
}

?>
<?php
	include_once('../dao/config.php');
    include_once('../dao/examDAO.php');
 	
 	$fname = $_POST['fname'];
 	$mname = $_POST['mname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];
 	$username = $_POST['username'];
 	$password = (sha1($_POST['pass']));

    $insert = ExamDAO::addUser($fname, $mname, $lname,
    						   $email, $username, $password);

		if($insert){
			echo "success -from php";
		}else{
			echo "failed -from php";
		}
	
?>
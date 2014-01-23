<?php
	include_once('../dao/config.php');
    include_once('../dao/examDAO.php');
 	
 	$userlog = mysql_real_escape_string($_POST['userlog']);
 	$passlog = mysql_real_escape_string(sha1($_POST['passlog']));
 	
	if(ExamDAO::logUser($userlog, $passlog)){
		echo "success";
	}else{
		echo "failed to login -from php";
	}
	
?>
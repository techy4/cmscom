<?php	
    session_start();
	
	if(!isset($_SESSION['UserID']) || $_SESSION['UserID']=='')
	{
		unset($_SESSION['UserID']);		
		unset($_SESSION['userName']);
		unset($_SESSION['designation']);
		header("Location:../logout");	
	}
	

?> 
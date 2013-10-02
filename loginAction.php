<?php
    require('App_Code/ClsCommonFun.php');
    session_start();
        unset($_SESSION['UserID']);		
		unset($_SESSION['userName']);
		unset($_SESSION['designation']);
    
    $obj = new ClsCommonFun;
    if(isset($_POST['btnLogin']))
		{
        
			$strUser	= trim($_REQUEST['loginId']);			
			$strPass	= trim($_REQUEST['password']);
			$intsalt 	= $_SESSION['rand'];          
            $sql ="call usp_admin_login('".$strUser."','".$strPass."','".$intsalt."')";
            $obj->isSpclChar($strUser,'logout');
			$obj->isSpclChar($strPass,'logout');
            $result	= $obj->ExecuteQuery($sql);                      
            echo(mysqli_num_rows($result));
            if(mysqli_num_rows($result)>0)
			{
				$row				= mysqli_fetch_assoc($result);	
                 $_SESSION['UserID']			= $strUser;
			     $_SESSION['userName']		= $row['VCH_FULLNAME'];
				 $_SESSION['designation']		= $row['VCH_DESIGNATION'];	         
				 
				header("Location: welcome/");
				
			}
			else
				{					
					$out_msg = '<font class="RedTxt">Invalid User ID and Password</font>';					
				}
			
		}
        
    
    
?>
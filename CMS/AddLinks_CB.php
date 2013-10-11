<?php
    require('../App_Code/ClsCommonFun.php');
    session_start();
     $obj = new ClsCommonFun;
 if(isset($_POST['btnSubmit']))
		{
      
            $strLinkLevel	= trim($_REQUEST['dwnLinkLevel']);			
			$str1stLevel	= trim($_REQUEST['dwn1stLevel']);
            $strLinkname	= trim($_REQUEST['txtLinkname']);			
            if(trim($_REQUEST['optionContent'])=="yes")
                $bitContent="0";
            else
                 $bitContent="1";
            $strLinkType	= trim($_REQUEST['optionsLinkType']);			
            $strLinkTarget	= trim($_REQUEST['dwnLinkTarget']);			
			//$strFunctionName	= trim($_REQUEST['dwnFunctionName']);		        
            $strFunctionName	= "4";		        
            $sql ="call usp_add_managelink('".$strLinkLevel."','".$str1stLevel."','".$strLinkname."','".$bitContent."','".$strLinkType."','".$strLinkTarget."','".$strFunctionName."','sdsd','44',@P_OUT)";
          //  call cmscom.usp_add_managelink('1','1','sdff',0,'on','New Window',4,'dfd','45', @out)
            //echo($sql);
            //exit();
            $result	= $obj->ExecuteQuery($sql);  
            echo ($result);
        }
?>
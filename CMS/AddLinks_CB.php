<?php
    require('../App_Code/ClsCommonFun.php');
    session_start();
     $obj = new ClsCommonFun;
 if(isset($_POST['btnSubmit']))
		{
      
            $strLinkLevel	= trim($_REQUEST['dwnLinkLevel']);
            $strLevel=$strLinkLevel-1;
            
            
           if($strLinkLevel==1){
            	$strParentId	= 0;
           
           }
           else{
                $strParentLevelId='dwn'.$strLevel.'stLevel';
			    $strParentId	= trim($_REQUEST[$strParentLevelId]);
           
           }
           
            $strLinkname	= trim($_REQUEST['txtLinkname']);	
//echo ($strLevel);
//echo ($strParentLevelId);
//            echo ($strLinkname);
           
            if(trim($_POST['optionContent'])=="Yes")
                $bitContent="0";
            else
                 $bitContent="1";
            $strLinkType	= trim($_REQUEST['optionsLinkType']);			
            $strLinkTarget	= trim($_REQUEST['dwnLinkTarget']);
            //echo ($strLinkType);          
             if(trim($_POST['optionsLinkType'])=="Internal"){
                    $dwnFunctionName=trim($_REQUEST['dwnFunctionName']);
                    $sql ="call cmscom.usp_add_managelink('".$strLinkLevel."','".$strParentId."','".$strLinkname."',".$bitContent.",'".$strLinkType."','".$strLinkTarget."',".$dwnFunctionName.",'','77', @out)";
                }
            else{
                    $txtLinkUrl=trim($_REQUEST['txtLinkUrl']);
                    $sql ="call cmscom.usp_add_managelink('".$strLinkLevel."','".$strParentId."','".$strLinkname."','".$bitContent."','".$strLinkType."','".$strLinkTarget."',0,'".$txtLinkUrl."','77', @out)";
                 }
            
			//$strFunctionName	= trim($_REQUEST['dwnFunctionName']);		        
            //$strFunctionName	= "4";		        
           // $sql ="call usp_add_managelink('".$strLinkLevel."','".$str1stLevel."','".$strLinkname."','".$bitContent."','".$strLinkType."','".$strLinkTarget."','".$strFunctionName."','sdsd','44',@P_OUT)";
           // $sql ="call cmscom.usp_add_managelink('1','1','sdff',0,'on','New Window',4,'dfd','45', @out)";
            //echo($sql);
            //exit();
            $result	= $obj->ExecuteQuery($sql);  
            echo ($result);
        }
?>
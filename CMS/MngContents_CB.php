<?php 
require('../App_Code/ClsCommonFun.php');
$obj = new ClsCommonFun;
$sql ="call usp_links_content()";
$result	= $obj->ExecuteQuery($sql);  

?>
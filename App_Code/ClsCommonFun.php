<?php
require("ClsDBCon.php");
class ClsCommonFun extends ClsDBCon
{
	// ============= Execute Query =========================
	public function ExecuteQuery($sqlQuery)
	{
		$con= $this->connectToDatabase();
		$result	= mysqli_query($con,$sqlQuery);
		$this->closeConnection($con);
		return $result;
	}
    // ============= Check Special Charecter =========================
	public function isSpclChar($strToCheck,$redirectTo)
	{
		$strPath=$this->webPath();
		$splCharToCheck	=	"<,>,',%,;,=,--";
		$arrySplChar	=	explode(',',$splCharToCheck);
		
		for ($i=0; $i<count($arrySplChar); $i++)
		{
			$intPos=substr_count($strToCheck,trim($arrySplChar[$i]));
			if ($intPos>0)
				{
					header("Location:".$strPath.$redirectTo);
				}
				
		}
	}
    
    //========== Get parent Path =============
	public function webPath()
	{		
		$strPath 		= "";
		$strQS			= $_SERVER['QUERY_STRING'];
		$intQSCount		= count(explode("&",$strQS));		
		if($intQSCount>0)
			{
				for($i=1;$i<$intQSCount;$i=$i+1)
					{
						$strPath="../".$strPath;
					}
			}
		return $strPath;
	}
}

?>
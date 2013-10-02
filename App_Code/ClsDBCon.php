<?php
class ClsDBCon 
{
    private $host="localhost";
    private $username="root";
    private $password='csmpl@123';
    private $database="cmscom";
    private $myconn;
	//================ create a function for connect database=================
    function connectToDatabase() 
    {

        $conn= mysqli_connect($this->host,$this->username,$this->password,$this->database);
		// =================testing the connection==========
        if(!$conn)
        {
            die ("Cannot connect to the database");
        }
        else
        {
            $this->myconn = $conn;           
        }

        return $this->myconn;

    }    
	// ================Close the connection================
    function closeConnection() 
    {
        mysqli_close($this->myconn);
    }

}
?>
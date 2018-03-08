<?php
include_once "page.php";

class UserType
{
	public $ID;
	public $UserTypeName;
	public $ArrayOfPages;
	function __construct($id)
	{
		if ($id !="")
		{	
            $db_obj = new dbconnect;
            $con = $db_obj->connect();
    
			$sql="select * from usertype where ID=$id";
			$result=$db_obj->executesql($sql);
            
			if ($row =  mysqli_fetch_array($result))
			{
				$this->UserTypeName=$row["Type"];
				$this->ID=$row["ID"];
				$sql="select Pages_ID from usertype_pages where UserType_ID=$this->ID";
				//echo $sql;
				$result=$db_obj->executesql($sql);
				$i=0;
				while($row1=mysqli_fetch_array($result))
				{
					$this->ArrayOfPages[$i]=new page($row1[0]);
					$i++;
				}
				
			}
				
		}
	}
	static function SelectAllUserTypesInDB()
	{
		$sql="select * from usertype";
		//mysql_query($sql);
		$db_obj = new dbconnect;
            $con = $db_obj->connect();
		$TypeDataSet = $db_obj->executesql($sql);
		
		$i=0;
		$Result;
		while ($row =  mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new UserType($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
}

?>
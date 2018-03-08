<?php

include_once "UserType.php";

class user
{
    public $fn;
    public $email;
    public $password;
    public $mobile;
    public $usertype_obj;
    public $ID;

    
    static function login($u,$p)
    {
        $db_obj = new dbconnect;
        $con = $db_obj->connect();
    
       
            $sql="SELECT * FROM user WHERE Email='$u' and Password='$p'";
            $result=$db_obj->executesql($sql);
        
            if($row = mysqli_fetch_array($result))
            {
               return new user($row[0]);
            }
        return NULL;
    }
    
    static function delete($obju)
    {
        $db_obj = new dbconnect;
        $con = $db_obj->connect();
    
        $sql = "delete from user where ID=".$obju->id;
        $db_obj->executesql($sql);
    }
    
    static function insert($obju)
    {
        $db_obj = new dbconnect;
        $con = $db_obj->connect();
    
        $sql = "insert into user(FullName,Email,Password,mobile) values('$obju->fn','$obju->email','$obju->password','$obju->mobile') ";
        $db_obj->executesql($sql);
    }
        
    static function update()
    {
        $db_obj = new dbconnect;
        $con = $db_obj->connect();
    
         $sql = "update user set FullName= '".$this->fn."',Email= '".$this->email."',mobile= '".$this->mobile."',Password= '".$this->password."' ";
         $db_obj->executesql($sql);
    }
    
    static function selectallusers()
    {
        $db_obj = new dbconnect;
    $con = $db_obj->connect();
    
        $sql = "select * from user";
        $userDataSet = $db_obj->executesql($sql);
        
        $i=0;
        $result;
        
        while($row = mysqli_fetch_array($userDataSet))
        {
            $obj = new user($row["ID"]);
            $result[$i]=obj;
            $i++;
        }
        return $result;
    }
    
   function __construct($id)
    {
        if($id != "")
        {
            $db_obj = new dbconnect;
            $con = $db_obj->connect();
    
            $sql = "select * from user where ID= '$id'";
            $userDataSet = $db_obj->executesql($sql);
            
            if($row = mysqli_fetch_array($userDataSet))
            {
                $this->fn = $row["FullName"];
                $this->email = $row["Email"];
                $this->password = $row["Password"];
                $this->mobile = $row["mobile"];
                $this->ID = $row["ID"];
                $this->usertype_obj = new userType($row["UserType_id"]);
            }
            
        }
    }
    
}
?>
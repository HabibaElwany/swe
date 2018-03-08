<?php 
include_once "user.php";
include_once "UserType.php";
include_once "page.php";
require("db.php");

if(isset($_POST['submit']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    
    $sql ="delete from usertype_pages where  UserType_ID= ".$_POST["UserType"]." ";
     $db_obj->executesql($sql);
    
    if(isset($_POST['choosenpages']))
    {
        $u = $_POST["UserType"];
        $p =  $_POST['choosenpages'];
        $sqll="insert into usertype_pages(UserType_ID,Pages_ID) values('$u','$p')";
        $db_obj->executesql($sqll);
    }
    
}

?>

<html>
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $("#btnLeft").click(function(){
            var selectedItem = $("#rightValues option:selected");
            $("#leftValues").append(selectedItem);
        });
        $("#btnRight").click(function(){
            var selectedItem = $("#leftValues option:selected");
            $("#rightValues").append(selectedItem);
        });
        
    });

</script>

    <body>
    
        <form action="" method="post">
        
            <table>
                <tr>
                    <td>All Pages</td>
                    <td></td>
                    <td>Chosen Pages</td>
                </tr>
                <tr>
                    <td>
                    <select id="leftValues" STYLE="width: 160px; box-sixing;" multiple>
                    
                        <?php
                        
                            $obj=page::selectallpages();
                            for($i=0;$i<count($obj);$i++)
                            {
                                echo"<option value='".$obj[$i]->ID."'>" .$obj[$i]->FriendlyName."</option>";
                            }
                        ?>
                        
                    </select>
                    </td>
                    <td align="center">
                        
                         <input type ="button" id="btnLeft" value="<<">
                        <input type ="button" id="btnRight" value=">>">
                        
                    </td>
                    <td>
                     <select id="rightValues" name="choosenpages" STYLE="width: 160px; box-sixing;" multiple>
                          
                     </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    
                        <select name="UserType">
                            <?php
                            
                                $obj=UserType::SelectAllUserTypesInDB();
                                for($i=0;$i<count($obj);$i++)
                                {
                                     echo"<option value='".$obj[$i]->ID."'>" .$obj[$i]->UserTypeName."</option>";
                                }
                            ?>
                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </tr>
            </table>
            </form>
        <form action="" method="post">
            <table>
            <select name="un" STYLE="width: 160px; box-sixing;" multiple>
                            <?php
                            
                                
                        $db_obj = new dbconnect;
                        $con = $db_obj->connect();


                            $sql="SELECT * FROM user WHERE UserType_id = 4";
                            $result=$db_obj->executesql($sql);
                            echo $sql;
                                if($row = mysqli_fetch_array($result))
                                {
                                     echo"<option value='".$row["ID"]."'>" .$row["FullName"]."</option>";
                                }
                            ?>
                        </select>
            
                        <select name="type">
                            <?php
                            
                                $obj=UserType::SelectAllUserTypesInDB();
                                for($i=0;$i<count($obj);$i++)
                                {
                                     echo"<option value='".$obj[$i]->ID."'>" .$obj[$i]->UserTypeName."</option>";
                                }
                            ?>
                        </select>
                <input type="submit" name="Add">
                </table>
            </form>
        
    </body>
</html>

<?php 
if(isset($_POST['Add']))
{
    $db_obj = new dbconnect;
    $con = $db_obj->connect();
    $t = $_POST["type"];
    $sql = "update user set UserType_id= '$t' WHERE ID= ".$_POST["un"]." ";
    $db_obj->executesql($sql);
}
    ?>
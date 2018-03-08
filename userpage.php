<?php session_start();?>
<html>

<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php require ("db.php"); ?>
</head>
    <body>
    <header>
        <nav class="menu">
          <?php
              if(!empty($_SESSION["Userid"]))
            {	
                $db_obj = new dbconnect;
                $con = $db_obj->connect();
                $id = $_SESSION["Userid"];
                $sql="select Pages_ID from usertype_pages where UserType_ID=$id";
                $result=$db_obj->executesql($sql);

                if ($row =  mysqli_fetch_array($result))
                {
                    $userpage=$row["Pages_ID"];
                    $sql="select FriendlyName, PhysicalPath from pages where ID=$userpage";
                    $result=$db_obj->executesql($sql);
                    $i=0;
                    while($row1=mysqli_fetch_array($result))
                    {
                       $f = $row1["FriendlyName"];
                       $p = $row1["PhysicalPath"];
                    ?>
            
                    <a href="<?php echo $p; ?>"><?php echo $f; ?></a>
            <?php
                        
                    }

                }

            }
            
          ?>
        </nav>
    </header>
    
    </body>
</html>
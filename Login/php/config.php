<?php


        if (!($link=mysqli_connect("localhost","root","")))
        {
            echo "There is an error connecting the DB.";
            exit();
        }
        if (!mysqli_select_db($link,"tiendacoches"))
        {
            echo "There is an error selecting the DB.";
            exit();
        }
        return $link;
    
?>
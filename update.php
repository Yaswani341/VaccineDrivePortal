<?php
    include "connect.php";
    echo"hiii";
    extract($_POST);
    if(isset($update))
    {
        $sql = "update user_details set dose1 = '$dose1', $dose2 = 'dose2'";
        $result = $link->query($sql);
        if($result)
        {
            echo "success";
        }
    }

?>
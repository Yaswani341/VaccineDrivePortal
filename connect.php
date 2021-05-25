<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"db_contact");
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    else
        echo "Success";
?>
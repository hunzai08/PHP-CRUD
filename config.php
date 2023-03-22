<?php 
    $servername = "root";
    $host = "localhost";
    $pass = "";
    $db = "university";

    $con = new mysqli($host,$servername,$pass,$db);

    if(!$con)
    {
        echo " Not Connected";
    }

?>
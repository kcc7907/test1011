<?php
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_select = "94o";
        $dbconnect = "mysql:host=".$db_host.";dbname=".$db_select;
        $pdo = new PDO($dbconnect, $db_user, $db_pass);

?>
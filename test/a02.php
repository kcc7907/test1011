<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_select = "94o";
    $dbconnect = "mysql:host=".$db_host.";dbname=".$db_select;
    $pdo = new PDO($dbconnect, $db_user, $db_pass);

    $sql = "INSERT INTO `product` (`id`, `name`, `num`, `price`) VALUES (?,?,?,?)";

    $rp = json_decode(file_get_contents('php://input'), true);





    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $rp[0]);
    $statement->bindValue(2, $rp[1]);
    $statement->bindValue(3, $rp[2]);
    $statement->bindValue(4, "33333");
    $statement->execute();




?>
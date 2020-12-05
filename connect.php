<?php
    // header("content-Type: text/html; charset=utf-8");
    // header("Access-Control-Allow-Origin: *");
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_select = "team03";

    $dbconnect = "mysql:host=".$db_host.";dbname=".$db_select;
    $pdo = new PDO($dbconnect, $db_user, $db_pass);

    // $sql = "SELECT * FROM `product`";
    $sql = "SELECT * FROM `product_img`";
    // $sql = "SELECT a.*,b.* FROM `product` as a INNER JOIN `product_img` as b ON a.`PRD_ID`= b.`PRODUCT_ID`";
    // $sql = "SELECT a.*,b.`PIMG_URL`,b.`PIMG_ID` FROM `product` as a LEFT JOIN `product_img` as b ON a.`PRD_ID`= b.`PRD_ID` ORDER BY `b`.`PIMG_ID` ASC";

    $result = $pdo->query($sql);
    $data = $result->fetchAll();
    // foreach($data as $index => $row){
    //     echo json_encode($row["PRD_ID"]);
    //     echo "   ";
    //     echo $row["PRD_NAME"];
    //     echo "   ";
    //     echo $row["PRD_SPECIES"];
    //     echo "   ";
    //     echo $row["DISCOUNT_ID"];
    //     echo "</br>";
    // }

        foreach($data as $index => $row){
        echo $row["PIMG_URL"];
        echo ",";
        }

    // $result->execute();
    // $data = $result->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($data);
?>
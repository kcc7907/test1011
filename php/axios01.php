<?php
        $db_host = "localhost";

        $db_user = "root";

        $db_pass = "";

        $db_select = "94o";

       //建立資料庫連線物件
        $dbconnect = "mysql:host=".$db_host.";dbname=".$db_select;

        //建立PDO物件，並放入指定的相關資料
        $pdo = new PDO($dbconnect, $db_user, $db_pass);

        // $sql = "SELECT * FROM `product` ";

        // $result = $pdo->query($sql);

        // //抓出全部且依照順序封裝成一個二維陣列
        // $data = $result->fetchAll();
        // //將二維陣列取出顯示其值
        // foreach($data as $index => $row){
        //        //  echo  $row["id"].' ';
        //        echo $row["id"];   //欄位名稱
        //        echo "   ";
        //        echo $row["name"];    //欄位名稱
        //        echo "   ";
        //        echo $row["num"];    //欄位名稱
        //        echo "   ";
        //        echo $row["price"]; //欄位名稱
        //        // echo "/n";
        //        echo '<br/>';
        // }

        $sql = "DELETE FROM `product` WHERE `product`.`id` = 103";
        $result = $pdo->query($sql);
        $sql = "SELECT * FROM `product` ";
        $result = $pdo->query($sql);
        $data = $result->fetchAll();
        foreach($data as $index => $row){
            echo $row["id"];
            echo "   ";
            echo $row["name"];
            echo "   ";
            echo $row["num"];
            echo "   ";
            echo $row["price"];
            echo '<br/>';
        }
?>
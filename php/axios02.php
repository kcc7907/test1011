<?php
       $db_host = "localhost";

       $db_user = "root";

       $db_pass = "";

       $db_select = "team03";

       //建立資料庫連線物件
        $dbconnect = "mysql:host=".$db_host.";dbname=".$db_select;

       //建立PDO物件，並放入指定的相關資料
        $pdo = new PDO($dbconnect, $db_user, $db_pass);

        $sql = "SELECT * FROM `product` ";

        $result = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $result->fetchAll();
       //將二維陣列取出顯示其值

       // echo $data;
       foreach($data as $index => $row){
            //    echo  $row["PRD_ID"].' ';
	       echo $row["PRD_ID"];   //欄位名稱
	       echo "   ";
	       echo $row["PRD_NAME"];    //欄位名稱
	       echo "   ";
	       echo $row["PRD_SPECIES"];    //欄位名稱
	       echo "   ";
	       echo $row["DISCOUNT_ID"]; //欄位名稱
	       echo "</br>";
       }
?>
<?php
header('Access-Control-Allow-Origin:*'); //允許所有來源訪問
header('Access-Control-Allow-Method:POST,GET'); //允許POST、GET訪問方式

session_start();
try {
    require_once("connectDB.php");
    $editEncyInfo = json_decode(file_get_contents("php://input"));
    // 使用file_get_contents獲取php://input內容，由json檔轉為物件/陣列
    // 前面表單輸入進來的資料會在以下被處理
    
	$sql = "insert into `encyclopedia` (`no`, `title`, `type`, `content`, `video`, `tag`) values(null, :title, :type, :content, '1')";
    // $addAdmin = $pdo->query($sql);
    $editEncy = $pdo->prepare($sql);
    $editEncy -> bindValue(":title", $editEncyInfo->title);
    $editEncy -> bindValue(":type", $editEncyInfo->type);
    $editEncy -> bindValue(":content", $editEncyInfo->content);
    $editEncy -> execute();

    // 跑sql既有資料，看acc是否有重複
    
    $no = $pdo->lastInsertId();
    
    echo json_encode($editEncyInfo); // 以上處理完後，將物件轉json檔
    
} catch (PDOException $e) {
   echo "錯誤原因 : ", $e->getMessage(), "<br>";
   echo "錯誤行號 : ", $e->getLine(), "<br>";	
}


?>
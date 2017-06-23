<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save page</title>
</head>
<body>
<?php

$storeName = $_POST['storeName'];
$address = $_POST['address'];
$cityID = $_POST['city'];
$phone = $_POST['phone'];
$manager = $_POST['manager'];


require_once('db.php');
if(!empty($_GET['storeId'])){
    $storeId = $_GET['storeId'];
    $sql = "UPDATE stores 
                SET storeName=:storename,
                address=:address,
                cityID=:cityID,
                phone=:phone,
                manager:manager
                WHERE storeId = :storeId";

}
else{

    $sql = "INSERT INTO stores(storeName,address,cityID,phone,manager) VALUES (:storeName,:address,:cityID,:phone, :manager)";

}





//- prepare and execute the SQL
$cmd = $conn->prepare($sql);
$cmd->bindParam(':storeName', $storeName, PDO::PARAM_STR, 100);
$cmd->bindParam(':address', $address, PDO::PARAM_STR,100);
$cmd->bindParam(':city', $cityID, PDO::PARAM_INT);
$cmd->bindParam(':phone', $phone, PDO::PARAM_STR,15);
$cmd->bindParam(':manager', $manager, PDO::PARAM_STR,100);


if(!empty($_GET['storeId'])) {
    $cmd->bindParam(':storeId', $storeId, PDO::PARAM_INT);
}
$cmd->execute();



//- disconnect from the DB
$conn = null;




header('location:stores.php');



?>
</body>
</html>

<?php ob_start(); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Deleting Page</title>
    </head>
    <body>
    <?php
    //Step 1 - connect to the DB
    require_once ('db.php');


    //Step 2 - Create SQL query
    $sql = "DELETE FROM stores WHERE storeId = :storeId";

    //Step 3 - prepare & execute the SQL
    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':storeId', $_GET['storeId'], PDO::PARAM_INT);
    $cmd->execute();
    echo $_GET['storeId'];

    //Step 4 - disconnect from the DB
    $conn=null;

    //Step 5 - redirect to the stores.php page
    header('location:stores.php');
    ?>
    </body>
    </html>
<?php ob_flush(); ?>
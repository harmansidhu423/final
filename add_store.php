
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/bootstrap-theme.min.css"
    <!-- Optional theme -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css"



</head>
<body>

<nav class="nav navbar-inverse">
    <ul class="nav navbar-nav">

        <li><a href="stores.php?cityID=1">Vancouver</a></li><li><a href="stores.php?cityID=2">Calgary</a></li><li><a href="stores.php?cityID=3">Toronto</a></li><li><a href="stores.php?cityID=4">Montreal</a></li>        <li><a href="add_store.php">Add a Store</a></li>
    </ul>

</nav>
<main class="container">
    <h1>Create a new store</h1>

    <?php
    if (!empty($_GET['storeId']))
    {   $storeId = $_GET['storeId'];

    }

    else {
        $storeId = null;
    }
    $storeName = null;
    $address=null;
    $city = null;
    $phone = null;






    if (!empty($storeId))
    {
        require('db.php');

        $sql = "SELECT * FROM stores  WHERE storeId=:storeId";
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':storeId', $storeId, PDO::PARAM_INT);
        $cmd->execute();
        $names = $cmd->fetch();
        $conn = null;


        $storeName = $names['storeName'];
        $address = $names['address'];
        $city = $names['city'];
        $phone = $names['phone'];
        $manager = $names['manager'];


    }
    ?>








    <?php
if(!empty($_GET['storeId']))
{
    echo'<form method="post" action="save_store.php?storeId='.$storeId.'">';
}
else
{
    echo '<form method="post" action="save_store.php">';
}
?>
    <form method="post" action="save_store.php" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label for="storeName" class="col-sm-1">store_name</label>
            <input name="storeName" id="storeName"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="address" class="col-sm-1">address</label>
            <input name="address" id="address"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="city" class="col-sm-1">City</label>
            <select name="city" id="city">
                <option>Vancouver</option><option>Calgary</option><option>Toronto</option><option>Montreal</option>            </select>
        </fieldset>

        <fieldset class="form-group">
            <label for="phone" class="col-sm-1">phone</label>
            <input name="phone" id="phone"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="manager" class="col-sm-1">Manager</label>
            <input name="manager" id="manager"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="photo" class="col-sm-1">Photo</label>
            <input name="photo" id="photo" type="file">
        </fieldset>

        <fieldset>
            <button class="btn btn-success col-sm-offset-1">Save</button>
        </fieldset>
    </form>
</main>





</html>

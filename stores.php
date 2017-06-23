<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="CSS/bootstrap-theme.min.css">



</head>
<body>

<nav class="nav navbar-inverse">
    <ul class="nav navbar-nav">

        <!--		it for to get link of pages to nav bar-->

        <?php



        session_start();


        require('db.php');
        $sql = "SELECT * FROM cities ";
        $cmd = $conn->prepare($sql);

        //step 4 - execute and store the results
        $cmd->execute();
        $cities = $cmd->fetchAll();

        //step 5 - disconnect from the DB


        foreach($cities as $city)
        {
            $cityID = $city['cityID'];
            echo'<li><a href="stores.php?cityID='.$cityID.'">'.$city['city'].'</a></li>';

        }
        echo'<li><a href="add_store.php">Add a store</a></li>
                  
                  </ul>';
        $conn = null;




        ?>
    </ul>


</nav>

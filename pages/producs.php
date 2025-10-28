<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("commonCode.php");
    NavBar("Proucts");
      
    ?>

    <h1> p </h1>


    <div class="AllProducts">
      
    <?php 
    $fileProducts= fopen ("Products.csv", "r");
    $headerOfTable = fgets($fileProducts);
    while (!feof($fileProducts)) {
        $oneProduct = fgets($fileProducts);
        $individualItemComponents = explode (";", $oneProduct);
        if (count($individualItemComponents)==6){

       


    ?>
    <div class="OneProduct">
            <div><?= $individualItemComponents[($language=="EN" ? 0 : 2)]?></div>
            <img src="./images/<?=$individualItemComponents[1] ?>">
            <div><?=$individualItemComponents[2]?> EUR/kg</div>
            <div><?=$individualItemComponents[($language=="EN") ? 3:4] ?></div>

      

        </div>    
    </div>

    <?php
    } }
    ?>

</body>
</html>
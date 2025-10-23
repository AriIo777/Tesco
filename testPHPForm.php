<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $carsAvailable=["Volvo","Saab","Mercedes", "Audi", "Dacia"];
        if (isset($_POST["fname"], $_POST["lname"], $_POST["cars"])) {
            if (!isset($carsAvailable[$_POST["cars"]])) {
                print("hey stop that");
                die();
            }


            print("User " . $_POST["fname"] . "loves " . $carsAvailable["cars"]); 
                   
        }
    
    ?>

    <form method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
            Pick your favourite car:     
        <select name="cars" id="cars">
            <?php
                foreach ($carsAvailable as $i => $car) {
            ?>

            <option value="<?=$i ?>"> <?= $carsAvailable[$i] ?> </option>
            
            <?php
             }
            ?> 

            <option value="Voldo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="mercedes">mercedes</option>
            <option value="audi">Audi</option>


            </select><br>
        <input type="submit" value="Submit">
    </form>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration form:</h1>
        <?php
        $showForm = true;
        if (isset($_POST["Username"], $_POST["psw"], $_POST["pswAgain"])) {
            $showForm = false;
            print("Registration is in process<br>");
            if ($_POST["psw"] == $_POST["pswAgain"] && !userAlreadyRegistered($_POST["Username"])){
                print("Passwords match and you have a valid user. You will be registered ...");
                $fHandler = fopen("Clients.csv", "a");
                fwrite($fHandler, "\n" . $_POST["Username"] . ";" . $_POST["psw"]);
                fclose($fHandler);
            } else {
                $showForm = true;
                print("Passwords do not match OR the user already exists. Try again");
            }
        }

        if ($showForm) {
        ?>
            <form method="POST">
                <label>Username:</label>
                <br>
                <input type="test" name="Username">
                <br>
                <label>Password:</label>
                <br>
                <input type="password" name="psw">
                <input type="password" name="pswAgain">
                <input type="submit" value="Register">
            </form>
        <?php
        }
        ?>
</body>
</html>
<?php
$language = "EN";
if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
}

//print("The current language is " . $language);

$arrayOfTranslations = []; 

$fileTranslation = fopen ("translation.csv", "r");
while (!feof($fileTranslations)){
    $lineFromFile = fgets($fileTranslation);
    $piecesOfTranslations = explode (";", $lineFromFile);
    $arrayOfTranslations[$piecesOfTranslations[0]] = ($language=="EN")?$piecesOfTranslations[1]:$piecesOfTranslations[2];
}

var_dump($arrayOfTranslations);

function navBar($currentPage)
{
    global $language;
    global $arrayOfTranslations;
    $pages = [
        "Home" => "index.php",
        "All Food" => "food.php",
        "Bakery" => "bakery.php",
        "Top Deals" => "topdeals.php",
    ];
?>
    <header>
        <img id="logo" src="../images/logo.png" alt="placeholder logo" width="100px">
        <nav>
            <ul>
                <?php foreach ($pages as $name => $url): ?>
                    <li class="highlightColor <?= ($currentPage === $name) ? 'active' : '' ?>">
                        <a href="<?= $url ?>"><?= $name === "Country1" ? "Country #1" : ($name === "Country2" ? "Country #2" : $name) ?></a>
                    </li>
                <?php endforeach; ?>
                <form>
                    <scelect name="lang" onchange="this.form.submit()">
                        <option value="EN" <?php if ($language == "EN") print "selected"; ?>>English</option>
                        <option value="GR" <?php if ($language == "GR") print "selected"; ?>>Greek</option>
                    </scelect>
                </form>
            </ul>
        </nav>
    </header>
<?php
}
?>

<?php
function  userAlreadyRegistered($checkedUser)
{
    //this function checks if $checkUser string is an existing use in the Clients.csv
    //IF the given user IS already in the file we will return TRUE0 -> user already registers
    //IF NOT (the user did not register) we wukk return from this function FALSE

    $bReturnValue = false; //the user NOT in our database

    //searching:
    $fHandler = fopen("Client.csv", "r");
    while (!feof($fHandler)) {
        $newLine = fgets($fHandler);
        $items = explode(";", $newLine); //gives individual items in string 
        if ($items[0] == $checkedUser)
            $bReturnValue = true;
    }
    fclose($fHandler);


    return $bReturnValue;
}
?>
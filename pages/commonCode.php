<?php
function navBar($currentPage)
{
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
            </ul>
        </nav>
    </header>
<?php
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
  <?php
  include("commonCode.php");
  navBar("Home");
  ?>
  <header>
    <h1>Yummiest food</h1>
    <nav>
      <a href="index.php" class="van">Home</a>
      <div id="dropdown">
        <span class="van">Categories &#11167;</span>
        <div id="content">

          <div class="categories">
            <ul>
              <li><a href="food.php">All Food</a></li>
              <li><a href="butter.php">British Salted Butter 250g</a></li>
              <li><a href="salmon.php">Flavoursome 2 Salmon Fillets</a></li>
              <li><a href="milkchocolate.php">Cadburry Dairy Milk Chocolate Bar lArge 360g</a></li>
              <li><a href="shortbread.php">Patersons Shortbrea Fingers 300g</a></li>
            </ul>
          </div>
          <div class="categories">
            <ul>
              <li><a href="bakery.php">Bakery</a></li>
              <li><a href="loaf.php">Tesco Finest Super Seeded Sliced Famhouse Loaf 800g</a></li>
              <li><a href="tortilla.php">Plain White Tortilla </a></li>
              <li><a href="Crumpets.php">Warburtons Crumpets 9 Pack</a></li>
            </ul>
          </div>
          <div class="categories">
            <ul>
              <li><a href="topdeals.php">Top Deals</a></li>
              <li><a href="maltesers.php">Maltesers Milk Chocolate Fun Size Bags 214.5g</a></li>
              <li><a href="squashies.php">Squashies Drumstick Minis 280g</a></li>
              <li><a href="cakes.php">Cadbury Pumpking Patch Cakes 4 Pack</a></li>
            </ul>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <main id="home">
    <div class="intro">
      <p>No idea what to eat for dinner?</p>
      <p>Heres some ingridients for a quick and cheap sandwich: </p>
    </div>
    <div class="figures">
      <a href="butter.php">
      <figure>
        <figcaption class="topfigcap">British Salted Butter 250g</figcaption>
        <img src="../images/butter.png" alt="Butter">
        <figcaption class="botfigcap">Salted butter. Minimum 80% milk fat. 100% British Milk Expertly churned for a smooth creamy taste</figcaption>
      </figure>
    </a>

      <a href="salmon.php">
      <figure>
        <figcaption class="topfigcap">Flavoursome 2 Salmon Fillets</figcaption>
        <img src="../images/salmon.png" alt="Salmon">
        <figcaption class="botfigcap">Skin-on salmon (Salmo salar) fillets.
Responsibly sourcing our seafood is important to us which is why Tesco fish experts work with responsibly managed farms to continually improve their high standards of quality and welfare. </figcaption>
      </figure>
    </a>
  
    <a href="loaf.php" >
      <figure>
        <figcaption class="topfigcap">Tesco Finest Super Seeded Sliced Famhouse Loaf 800g</figcaption>
        <img src="../images/loaf.png" alt="Loaf">
        <figcaption class="botfigcap">Sliced white bread with mixed seeds and grains.
Created by our expert bakers. We make this flavoursome loaf using dough blended with seeds and grains, including sunflower and pumpkin seeds, for a rich flavour. It's then rolled in a mixture of six seeds, including poppy seeds, for extra texture
Packed with seeds and grains, including sunflower seeds for a rich flavour.</figcaption>
      </figure>
    </a>
    </div>
  </main>
  <footer>
    <p>© Joanna Arianoutsou</p>
  <img src="images/footer.png" alt="footer">
</footer>
</body>

</html>
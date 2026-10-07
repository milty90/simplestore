<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="header-div">
        <div class="header-left">
          <a class="header-link" href="menu.php?content=menu">Menu</a>
        </div>
        <h1 class="header-title">simple store</h1>
        <div class="header-right">
          <a class="header-link" href="menu.php?content=account">Account</a>
          <a class="header-link" href="menu.php?content=cart">Cart</a>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="main-div">
        <h2 class="main-title">welcome to simple store</h2>
        <div class="cards-container">
          <?php
          $jsonData = file_get_contents('products.json');
          $products = json_decode($jsonData, true);
          foreach ($products as $product) {
          $name = $product['name'];
          $price = $product['price'];
          $front = $product['images']['front'];


          include 'card.php';
          }
          ?>  
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="footer-div">
        <p>&copy; 2026 Simple Store. All rights reserved.</p>
        <p>Powered by PHP 8</p>
      </div>
    </footer>
  </body>
</html>

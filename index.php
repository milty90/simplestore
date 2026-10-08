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
          <a class="header-icon" href="menu.php?content=menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
              <title>menu</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5h16M4 12h16M4 19h16"/></svg></a>
        </div>
        <h1 class="header-title">simple store</h1>
        <div class="header-right">
          <a class="header-icon" href="menu.php?content=home"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><title>user</title><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg></a>
          <a class="header-link" href="menu.php?content=account">Account</a>
          <a class="header-icon" href="menu.php?content=home">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><title>shopping-cart</title><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m2.05 2.05l1.099-.028a1 1 0 0 1 1.008.815l2.69 14.347A1 1 0 0 0 7.83 18H18"/><path d="M4.563 5h16.435a1 1 0 0 1 .981 1.204l-1.026 6.226A2 2 0 0 1 18.962 14H6.25"/><circle cx="18" cy="20" r="2"/><circle cx="8" cy="20" r="2"/></g></svg></a>
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
        <p>Powered by <span class="php-logo"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 128 128"><title>php</title><path fill="currentColor" d="M64 30.332C28.654 30.332 0 45.407 0 64s28.654 33.668 64 33.668c35.345 0 64-15.075 64-33.668S99.346 30.332 64 30.332m-5.982 9.81h7.293v.003l-1.745 8.968h6.496q6.132 0 8.458 2.139q2.328 2.14 1.398 6.93l-3.053 15.7h-7.408l2.902-14.929q.495-2.546-.365-3.473q-.86-.925-3.658-.925h-5.828L58.752 73.88h-7.291zM26.73 49.114h14.133q6.379 0 9.305 3.348q2.925 3.347 1.758 9.346q-.481 2.472-1.625 4.52t-2.99 3.745q-2.202 2.06-4.891 2.936q-2.691.876-6.858.875h-6.294l-1.745 8.97h-7.35zm57.366 0h14.13q6.378 0 9.303 3.348h.002q2.926 3.347 1.76 9.346q-.48 2.472-1.623 4.52t-2.992 3.745q-2.2 2.06-4.893 2.936q-2.69.876-6.855.875h-6.295l-1.744 8.97h-7.35zm-51.051 5.325l-2.742 14.12h4.468q4.446.001 6.622-1.673q2.174-1.675 2.937-5.592q.728-3.762-.666-5.309t-5.584-1.547zm57.363 0l-2.744 14.12h4.47q4.446.001 6.622-1.673q2.173-1.675 2.935-5.592q.73-3.762-.664-5.309t-5.584-1.547z"/></svg></span> <?php echo phpversion(); ?></p>
      </div>
    </footer>
  </body>
</html>

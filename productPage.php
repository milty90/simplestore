
<div class="product-page">

    <div class="product-details">
         
        <div class="product-info">
        <a class="back-to-products" href="index.php">← back to products</a>
         <p class="product-category"><?= htmlspecialchars(
             (string) $selectedProduct["category"],
             ENT_QUOTES,
             "UTF-8",
         ) ?></p><h2 class="product-name"><?= htmlspecialchars(
    $selectedProduct["name"],
    ENT_QUOTES,
    "UTF-8",
) ?></h2>
        <p class="product-description"><?= htmlspecialchars(
            $selectedProduct["description"],
            ENT_QUOTES,
            "UTF-8",
        ) ?></p>
        <p class="product-description"><?= htmlspecialchars(
            (string) "
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            ",
            ENT_QUOTES,
            "UTF-8",
        ) ?></p>
      
        



        </div>
    </div>
    <div class="product-images">
      <img class="product-image"
        src="<?= htmlspecialchars(
            $selectedProduct["images"]["front"],
            ENT_QUOTES,
            "UTF-8",
        ) ?>"
        alt="<?= htmlspecialchars(
            $selectedProduct["name"],
            ENT_QUOTES,
            "UTF-8",
        ) ?>"
      >
      <img class="product-image"
        src="<?= htmlspecialchars(
            $selectedProduct["images"]["detail"],
            ENT_QUOTES,
            "UTF-8",
        ) ?>"
        alt="<?= htmlspecialchars(
            $selectedProduct["name"],
            ENT_QUOTES,
            "UTF-8",
        ) ?>"
      >
      <img class="product-image"    
        src="<?= htmlspecialchars(
            $selectedProduct["images"]["folded"],
            ENT_QUOTES,
            "UTF-8",
        ) ?>"
        alt="<?= htmlspecialchars(
            $selectedProduct["name"],
            ENT_QUOTES,
            "UTF-8",
        ) ?>"
      >
    </div>
    <div class="product-buy">
        
        <div class="product-options">
            <div class="size-options">  
                <?php foreach (
                    $selectedProduct["size"]
                    as $size => $availability
                ): ?>
                    <?php if ($availability === "available"): ?>
                        <button class="size-option"><?= htmlspecialchars(
                            $size,
                            ENT_QUOTES,
                            "UTF-8",
                        ) ?></button>
                    <?php endif; ?>
                    <?php if ($availability === "not available"): ?>
                        <button class="size-option" disabled><?= htmlspecialchars(
                            $size,
                            ENT_QUOTES,
                            "UTF-8",
                        ) ?></button>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="product-price">
         <p class="product-price-text">$<?= htmlspecialchars(
             (string) $selectedProduct["price"],
             ENT_QUOTES,
             "UTF-8",
         ) ?></p>   
        <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>

</div>
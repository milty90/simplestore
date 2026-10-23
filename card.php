
<a class="card" href="index.php?id=<?= rawurlencode((string) $id) ?>">
  <div class="card-content">
    <img
      class="card-image"
      src="<?= htmlspecialchars($front, ENT_QUOTES, "UTF-8") ?>"
      alt="<?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>"
      width="400"
      height="400"
    />
  </div>

  <div class="card-details">
    <p class="card-title">
      <?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>
</p>
    <p class="card-price">
      $<?= htmlspecialchars((string) $price, ENT_QUOTES, "UTF-8") ?>
</p>
  </div>
</a>

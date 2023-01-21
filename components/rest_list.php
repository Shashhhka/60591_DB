<section class="catalog">
    <div class="container">
        <h1 class="catalog-title">Подборка заведений</h1>

        <ul class="products-list">

            <?php while ($item = $result->fetch()) {?>
                <li>
                    <a class="product-card"  href="rests.php?id=<?= $item['id'] ?>">
                        <img src="<?= $item['img_url'] ?>" width="156" height="120" alt="<?= $item['id'] ?>">
                        <div class="product-options">
                            <span class="name"><?= $item['name'] ?></span>
                        </div>
                    </a>
                </li>
            <?php }; ?>
        </ul>
    </div>
</section>
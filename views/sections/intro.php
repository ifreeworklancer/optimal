<!-- Intro -->
<section id="intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-7">
                <div class="intro-description">
                    <img src="<?= $logo; ?>" alt="logo" class="intro-description__logo">
                    <div class="intro-description__text">
                        <?= $intro['description']; ?>
                    </div>
                </div>
                <div class="intro-stocks custom-slider reveal-left">
                    <?php foreach ($intro['stocks'] as $stock) : ?>
                        <div class="intro-stocks-item">
                            <div class="custom-badges">
                                <div class="custom-badges-item">
                                    акция
                                </div>
                                <div class="custom-badges-subtitle">
                                    <?= $stock['subtitle']; ?>
                                </div>
                            </div>
                            <div class="intro-stocks-prev">
                                <img src="<?= $stock['image']; ?>" alt="image">
                            </div>
                            <div class="intro-stocks-body">
                                <h2 class="intro-stocks__title">
                                    <?= $stock['title']; ?>
                                </h2>
                                <div class="intro-stocks__description">
                                    <?= $stock['description']; ?>
                                </div>
                                <div class="intro-stocks-price">
                                    <div class="intro-stocks-price-value intro-stocks-price-value--old">
                                        <span><?= $stock['old_price']; ?></span>
                                        грн
                                    </div>
                                    <div class="intro-stocks-price-text">
                                        цена
                                    </div>
                                    <div class="intro-stocks-price-value">
                                        <span><?= $stock['price']; ?></span>
                                        грн
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light">
                                    В каталог
                                    <svg width="8" height="14">
                                        <use xlink:href="#arrow-next"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-10 col-lg-5">
                <?php foreach ($intro['items'] as $item) : ?>
                    <a href="#" class="intro-item reveal-right" style="background-image: url(<?= $item['image']; ?>);">
                        <div class="intro-item-body">
                            <h4 class="intro-item__title">
                                <?= $item['title']; ?>
                            </h4>
                            <div class="intro-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
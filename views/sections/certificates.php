<!-- Certificates -->
<section id="certificates">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-8 col-lg-5 order-2 order-lg-1">
                <div class="certificates-item">
                    <div class="section-description">
                        <div class="section-description__subtitle">
                            <?= $certificates['subtitle']; ?>
                        </div>
                        <h2 class="section-description__title">
                            <?= $certificates['title']; ?>
                        </h2>
                    </div>
                    <div class="certificates-item__description">
                        <?= $certificates['description']; ?>
                    </div>
                    <div class="certificates-item-logo">
                        <?php foreach ($certificates['logo'] as $item) : ?>
                            <div class="certificates-item-logo-col">
                                <img src="<?= $item; ?>" alt="logo">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <figure class="decor-image" style="background-image: url(../../images/icons/certificates-decor.png);"></figure>
                </div>
            </div>
            <div class="col-sm-8 col-lg-5 order-1 order-lg-2">
                <div class="certificates-slider custom-slider">
                    <?php foreach ($certificates['images'] as $item) : ?>
                        <div class="certificates-slider-item">
                            <img src="<?= $item; ?>" alt="certificates image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
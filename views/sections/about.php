<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-item">
                    <div class="about-item-body">
                        <div class="section-description">
                            <div class="section-description__subtitle">
                                <?= $about['subtitle']; ?>
                            </div>
                            <h3 class="section-description__title">
                                <?= $about['title']; ?>
                            </h3>
                        </div>
                        <div class="content-description">
                            <?= $about['prev_description']; ?>
                            <div class="content-description-hidden">
                                <?= $about['hidden_description'] ?>
                            </div>
                            <?php if ($about['hidden_description']) : ?>
                                <a href="#" class="link-more" data-hidden-text="Скрыть информацию" data-show-text="Больше информации">
                                    <span>Больше информации</span>
                                    <svg width="8" height="14">
                                        <use xlink:href="#arrow-next"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="about-item-prev">
                        <figure style="background-image: url(<?= $about['image']; ?>);"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
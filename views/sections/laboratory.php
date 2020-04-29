<!-- Laboratory -->
<section id="laboratory">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="laboratory-item">
                    <div class="laboratory-item-prev reveal-left">
                        <figure style="background-image: url(<?= $laboratory['image']; ?>);"></figure>
                    </div>
                    <div class="laboratory-item-body reveal-right">
                        <h2 class="laboratory-item__title text-secondary">
                            <?= $laboratory['title'] ?>
                        </h2>
                        <div class="content-description">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="content-description__text">
                                    <?= $laboratory['first_description']; ?>
                                </div>
                                <div class="content-description__text">
                                    <?= $laboratory['second_description']; ?>
                                </div>
                            </div>
                            <div class="content-description-hidden">
                                <?= $laboratory['hidden_description']; ?>
                            </div>
                            <?php if ($laboratory['hidden_description']) : ?>
                                <a href="#" class="link-more" data-hidden-text="Скрыть информацию" data-show-text="Больше информации">
                                    <span>Больше информации</span>
                                    <svg width="8" height="14">
                                        <use xlink:href="#arrow-next"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
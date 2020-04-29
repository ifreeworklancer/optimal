<!-- Advantages -->
<section id="advantages">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $count = 0;
            foreach ($advantages['items'] as $item) : $count++; ?>
                <div class="col-sm-8 col-lg-4">
                    <div class="advantages-item reveal-bottom-interval">
                        <div class="advantages-item-prev">
                            <img src="<?= $item['image'] ?>" alt="advantages image">
                        </div>
                        <div class="advantages-item-body">
                            <div class="advantages-item-count">
                                <?= $count; ?>
                            </div>
                            <div class="advantages-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
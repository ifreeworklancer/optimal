<!-- Category -->
<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-4">
                    <?= $category['title'] ?>
                </h2>
            </div>
            <?php $count = 0;
            foreach ($category['items'] as $item) : $count++; ?>
                <div class="col-sm-6 col-lg-4">
                    <a href="<?= $item['link']; ?>" class="category-item">
                        <svg width="40" height="40">
                            <use xlink:href="#category-<?= $count; ?>"></use>
                        </svg>
                        <?= $item['title']; ?>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-light">
                    В каталог
                    <svg width="8" height="14">
                        <use xlink:href="#arrow-next"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
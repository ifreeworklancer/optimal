<!-- Sale -->
<section id="sale">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sale-item" style="background-image: url(../../images/bg/sale-bg.jpg);">
                    <div class="custom-badges">
                        <div class="custom-badges-item">
                            акция
                        </div>
                    </div>
                    <div class="sale-item-body mr-lg-4">
                        <h2 class="sale-item__title">
                            <?= $sale['title']; ?>
                        </h2>
                        <div class="sale-item__description">
                            <?= $sale['description']; ?>
                        </div>
                        <a href="#" class="btn btn-light">
                            Купить
                        </a>
                    </div>
                    <img src="../../images/content/sale/sale.png" alt="sale" class="sale-item-image d-none d-lg-block">
                </div>
            </div>
        </div>
    </div>
</section>
<?php

require_once('store.php');
require_once('functions.php');
require_once('views/base/header-secondary.php');
?>

    <!-- Thanks -->
    <section id="page-thanks" style="background-image: url(images/bg/thanks-bg.jpg);">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="page-secondary-item">
                        <h1 class="page-secondary-item__title">
                            Спасибо!
                        </h1>
                        <div class="page-secondary-item__subtitle">
                            Наш менеджер свяжется с Вами!
                        </div>
                        <a href="/" class="btn btn-light">
                            На главную
                            <svg width="8" height="14">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('views/base/footer-secondary.php');
</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="footer-contacts" style="background-image: url(../../images/bg/footer-bg.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-4 mb-4 mb-lg-0">
                    <a href="/" class="logo">
                        <img src="../../images/icons/logo-footer.png" alt="logo">
                    </a>
                </div>
                <div class="col-sm-8 col-lg-5 mb-4 mb-lg-0">
                    <ul class="contacts-list">
                        <li class="contacts-list-item contacts-list-item--address">
                            <a href="<?= $address_link; ?>">
                                <svg width="11" height="15">
                                    <use xlink:href="#placeholder-icon"></use>
                                </svg>
                                <span><?= $address; ?></span>
                            </a>
                        </li>
                        <li class="contacts-list-item contacts-list-item--phone text-md-center">
                            <a href="tel:<?= phone_link($phone1); ?>">
                                <svg width="11" height="15">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <span><?= $phone1; ?></span>
                            </a>
                            <a href="tel:<?= phone_link($phone2); ?>">
                                <svg width="11" height="15">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <span><?= $phone2; ?></span>
                            </a>
                        </li>
                        <li class="contacts-list-item contacts-list-item--email">
                            <a href="mailto:<?= $email; ?>">
                                <svg width="20" height="14">
                                    <use xlink:href="#mail-icon"></use>
                                </svg>
                                <span><?= $email; ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8 col-lg-3">
                    <div class="contacts-col">
                        <div class="contacts-col__text">
                            Возникли вопросы или есть замечания? Свяжитесь с нами
                        </div>
                        <a href="#" class="btn btn-light">
                            Связаться
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg text-center text-lg-left mb-2 mb-lg-0">
                    <div class="footer-copyright-item">
                        МФО 9715268877 EДРПО 1167746723517
                    </div>
                </div>
                <div class="col-lg text-center text-lg-center mb-2 mb-lg-0">
                    <div class="footer-copyright-item">
                        <?= date('Y'); ?> &copy;Все права защищены
                    </div>
                </div>
                <div class="col-lg text-center text-lg-right">
                    <div class="footer-copyright-item">
                        Дизайн и вебразработка <a href="https://impressionbureau.pro/" target="_blank"></a> Impression Bureau 2020
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>
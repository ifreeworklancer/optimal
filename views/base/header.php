<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="header-bar header-bar--top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto d-flex align-items-center">
                    <a href="/" class="logo d-lg-none">
                        <img src="../../images/icons/logo-small.png" alt="logo">
                    </a>
                    <ul class="languages-list d-none d-lg-block">
                        <li>
                            <span>
                                <span>
                                    ru
                                </span>
                            </span>
                            <ul class="language-dropdown">
                                <li>
                                    <a href="#">
                                        <span>
                                            ua
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex flex-column flex-md-row align-items-md-center position-relative">
                        <div class="place-select-text">
                            <svg width="11" height="15">
                                <use xlink:href="#placeholder-icon"></use>
                            </svg>
                            Ваш город
                        </div>
                        <div class="place-select">
                            <div class="place-select-input">
                                <div class="place-select-input__value">
                                    Запорожье
                                </div>
                                <div class="place-select-input__icon"></div>
                            </div>
                            <ul class="place-select-list">
                                <li>
                                    <span>Киев</span>
                                </li>
                                <li>
                                    <span>Харьков</span>
                                </li>
                                <li>
                                    <span>Львов</span>
                                </li>
                                <li>
                                    <span>Днепр</span>
                                </li>
                                <li>
                                    <span>Мелитополь</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-flex align-items-center">
                    <ul class="contacts-list d-none d-lg-flex">
                        <li class="contacts-list-item">
                            <a href="tel:<?= phone_link($phone1); ?>">
                                <svg width="11" height="15">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone1; ?>
                            </a>
                        </li>
                        <li class="contacts-list-item">
                            <a href="tel:<?= phone_link($phone2); ?>">
                                <svg width="11" height="15">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone2; ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="languages-list d-lg-none">
                        <li>
                            <span>
                                <span>
                                    ru
                                </span>
                            </span>
                            <ul class="language-dropdown">
                                <li>
                                    <a href="#">
                                        <span>
                                            ua
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="burger-menu d-lg-none">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bar header-bar--bottom d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <ul class="header-nav">
                        <li class="header-nav-item header-nav-item--output">
                            <a href="#">
                                <div class="header-nav-item__icon">
                                    <div class="row justify-content-between mx-0">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row justify-content-between mx-0">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                </div>
                                Каталог
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#about" class="anchor-link">
                                О нас
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#laboratory" class="anchor-link">
                                Лаборатория
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#contacts" class="anchor-link">
                                Карта наших аптек
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#awards" class="anchor-link">
                                Сертификаты и награды
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#contacts" class="anchor-link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-light open-contact">
                        Связаться
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu d-lg-none">
        <ul class="header-nav">
            <li class="header-nav-item header-nav-item--output">
                <a href="#">
                    <div class="header-nav-item__icon">
                        <div class="row justify-content-between mx-0">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="row justify-content-between mx-0">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                    Каталог
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#about" class="anchor-link">
                    О нас
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#laboratory" class="anchor-link">
                    Лаборатория
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#contacts" class="anchor-link">
                    Карта наших аптек
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#awards" class="anchor-link">
                    Сертификаты и награды
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#contacts" class="anchor-link">
                    Контакты
                </a>
            </li>
        </ul>
        <ul class="contacts-list">
            <li class="contacts-list-item">
                <a href="tel:<?= phone_link($phone1); ?>">
                    <svg width="11" height="15">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                    <?= $phone1; ?>
                </a>
            </li>
            <li class="contacts-list-item">
                <a href="tel:<?= phone_link($phone2); ?>">
                    <svg width="11" height="15">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                    <?= $phone2; ?>
                </a>
            </li>
        </ul>
    </div>
</header>


<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>

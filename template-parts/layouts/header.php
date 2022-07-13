<?php
$contacts = get_field('contacts', 'contacts');
$logo = $contacts['logo'];
//dump($contacts)
?>
<header class="header">
    <div class="header__container container">
        <div class="header__body">
            <a class="header__logo" href="<?= get_home_url(); ?>">
                <img src="<?= $logo['url'] ?>"alt="Logo">
            </a>
            <div class="header__burger"></div>
            <nav class="header__menu active">
                <ul class="header__list">
                    <li><a href="#who_we" class="header__link">Кто мы</a></li>
                    <li><a href="#courators" class="header__link">Кураторы</a></li>
                    <li><a href="#events" class="header__link">Мероприятия</a></li>
                    <li><a href="#faq" class="header__link">FAQ</a></li>
                    <li><a href="#callback" class="header__link">Заявка</a></li>
                    <li><a href="#footer" class="header__link">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header__menu__body disable">
        <nav class="header__menu disable">
            <ul class="header__list">
                <li><a href="#who_we" class="header__link">Кто мы</a></li>
                <li><a href="#courators" class="header__link">Кураторы</a></li>
                <li><a href="#events" class="header__link">Мероприятия</a></li>
                <li><a href="#faq" class="header__link">FAQ</a></li>
                <li><a href="#callback" class="header__link">Заявка</a></li>
                <li><a href="#footer" class="header__link">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>
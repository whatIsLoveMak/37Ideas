<?php
$contacts = get_field('contacts', 'contacts');
$logo = $contacts['logo'];
$phone = $contacts['phone1'];
$phone2 = $contacts['phone2'];
$address = $contacts['address'];
?>
<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-grid__item">Контакты</div>
            <div class="footer-grid__item"> 
                <a href="tel:<?= $phone ?>"></a><?= $phone ?>
                <a href="tel:<?= $phone2 ?>"><?= $phone2 ?></a>
            </div>
            <div class="footer-grid__item"><?= $address ?></div>
            <div class="footer-grid__item">Политика конфиденциальности  ©2022</div>
            <a class="scroll-top" href=""><img src="<?= get_template_directory_uri() ?>/src/image/footer-arrow.png" alt=""></a>
        </div>
    </div>
</footer>
</div>

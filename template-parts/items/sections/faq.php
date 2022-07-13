<section id="faq" class="section faq">
    <div class="container">
        <div class="faq-title"><?= $faq_items['faq-title'] ?><span class="font small">(<?= count($faq_items['faq-questions']) ?>)</span></div>
        <div class="faq__row">
            <?php foreach ($faq_items['faq-questions'] as $key => $item) { 
                if($key !== 5) : ?>
                    <div class="<?= $item['faq-left'] ?> faq-margin">
                        <div class="<?= $item['faq-space'] ?>">
                            <div class="faq-img"> <img src="<?= $item['faq-img']['url']??null ?>" alt="<?= $item['faq-img']['title']??null ?>"></div>
                            <div class="faq-text">
                                <div class="faq__row-title"><?= $item['faq-question']??null ?></div>
                                <div class="faq__row-desc"><?= $item['faq-desc']??null ?></div>
                            </div>
                        </div>
                    </div>
            <?php else : ?>
                    <div class="separator"><span class="stick"></span><p>Что делать если ↓</p><span class="stick"></span></div>
            <?php endif; }; ?>
        </div>
    </div>
</section>
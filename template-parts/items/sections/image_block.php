<section class="section image_block">
    <div class="image_row">
        <?php foreach($img as $item) { ?>
            <div class="image_item">
                <div class="image_block__img">
                    <img src="<?= $item['img_insert']['url']??null ?>" alt="<?= $item['img_insert']['url']??null ?>">
                </div>
            </div>
        <?php }; ?>
    </div>
</section>
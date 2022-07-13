<section id="courators" class="section courators">
    <div class="container">
        <div class="courators_grid">
            <?php foreach ($add_courator as $key => $item) { ?>
                <div <?php if($item['reverse']){?> class="courators__row-reverse" <?php } else {?>class="courators__row"<?php }; ?>>
                    <div class="courators_item">
                        <div class="courators_item__img">
                            <img src="<?= $item['img_courator']['url']??null ?>" alt="<?= $item['img_courator']['title']??null ?>">
                            <div class="courators_desc"><?=$item['desc_img']??null ?></div>
                        </div>
                    </div>
                    <div class="courators_item">
                        <div class="courators_text"> 
                            <?php if ($key === 0) {
                                echo ( $item['some_text']) ?><span class="font small">(<?php echo (count($add_courator) ) ?? null;?>)</span> <?php
                            } 
                            else {
                                echo $item['some_text']??null;
                            } ?>
                        </div>
                    </div>
                </div>
            <?php };?>
        </div>
    </div>
</section>
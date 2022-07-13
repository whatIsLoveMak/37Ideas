<section id="events" class="section events">
    <div class="container">
        <div class="events_grid">
            <div class="events_item"><?= $items['title'] ?> <span class="font small">(<?= count($items['event']) ?>)</span></div>
            <div class="events_item">
                <?php foreach($items['event'] as $item) {?>
                    <div class="events_item__row">
                        <div class="events_item__row-img"> <img src="<?= $item['event-img']['url']??null ?>" alt="<?= $item['event-img']['title']??null ?>"></div>
                        <div class="events_item__row-text">
                            <div class="events_item__row-text-title"><?= $item['event-title']??null ?></div>
                            <div class="events_item__row-text-desc">
                                <div class="events_item__row-text-date"><?= $item['event-date']??null ?></div>
                                <a href="">Регистрация</a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
</section>
<?php $partners = get_field('partners');?>
<?php if (!empty($partners)): ?>
    <section class="where_buy">
        <div class="container">
            <?php if (!empty($partners['subtitle'])): ?>
                <div class="section-subtitle"><?php echo $partners['subtitle']?></div>
            <?php endif; ?>
            <?php if (!empty($partners['title'])): ?>
                <h2 class="section-title"><?php echo $partners['title']?></h2>
            <?php endif; ?>
            <?php if (!empty($partners['partners'])): ?>
                <div class="where_buy__content">
                    <?php foreach ($partners['partners'] as $partner):?>
                        <div class="where_buy__item">
                            <?php if (!empty($partner['partner_image'])): ?>
                                <div class="where_buy__item-image">
                                    <img src="<?php echo $partner['partner_image']?>" alt="">
                                </div>
                            <?php endif; ?>
                            <a href="#" class="where_buy__item-link">Смотреть на карте</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif;?>
            <?php if (!empty($partners['link_btn']) && !empty($partners['text_btn'])): ?>
                <a href="<?php echo $partners['link_btn']?>" class="btn btn--green btn--center"><?php echo $partners['text_btn']?></a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

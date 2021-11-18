<?php $partners = get_field('partners');?>
<?php if ($partners): ?>
    <section class="where_buy">
        <div class="container">

            <?php if ($partners['subtitle']): ?>
                <div class="section-subtitle"><?= $partners['subtitle']?></div>
            <?php endif; ?>

            <?php if ($partners['title']): ?>
                <h2 class="section-title"><?= $partners['title']?></h2>
            <?php endif; ?>

            <?php if ($partners['partners']): ?>
                <div class="where_buy__content">
                    <?php foreach ($partners['partners'] as $partner):?>
                        <div class="where_buy__item">
                            <?php if ($partner['partner_image']): ?>
                                <div class="where_buy__item-image">
                                    <img src="<?= $partner['partner_image']?>" alt="">
                                </div>
                            <?php endif; ?>
                            <a href="#" class="where_buy__item-link">Смотреть на карте</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif;?>

            <?php if ($partners['button']): ?>
                <a
                        href="<?= $partners['button']['url']?>"
                        class="btn btn--green btn--center"
                    <?= $partners['button']['target'] ? 'target="'.$partners['button']['target'].'"' : ' '?>
                >
                    <?= $partners['button']['title']?>
                </a>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>

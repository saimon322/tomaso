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
                            <a href="#maps-modal" data-fancybox class="where_buy__item-link">Смотреть на карте</a>
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

    <div class="fancymaps" id="maps-modal">

        <div class="fancymaps__modal-logo">
            <svg width="80" height="27">
                <use xlink:href="#logo_text"></use>
            </svg>
            <svg width="65" height="30">
                <use xlink:href="#logo"></use>
            </svg>
        </div>

        <?php if ($partners['partners']): ?>
            <div class="fancymaps__head">
                <?php foreach ($partners['partners'] as $partner):?>
                    <div class="fancymaps__content">
                        <?php if ($partner['partner_image']): ?>
                            <img src="<?= $partner['partner_image']?>" alt="" class="fancymaps__logo">
                        <?php endif; ?>
                        <?php if ($partner['partner_name']): ?>
                            <div class="fancymaps__title"><?= $partner['partner_name']?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;?>

        <?php if ($partners['partners']): ?>
            <div class="swiper fancymaps__maps">
                <div class="swiper-wrapper fancymaps__wrapper">
                    <?php foreach ($partners['partners'] as $partner):?>

                        <?php if ($partner['partner_map']): ?>
                            <div class="swiper-slide fancymaps__slide">
                                <iframe src="<?= $partner['partner_map']?>" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif;?>

        <div class="fancymaps__pagination"></div>

    </div>

<?php endif; ?>

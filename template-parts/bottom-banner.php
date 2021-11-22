<?php $bottom_banner = get_field('bottom_banner'); ?>
<?php if ($bottom_banner): ?>
    <section class="banner bottom-banner">
        <div class="container bottom-banner__container">

            <div class="bottom-banner__content">
                <?php if ($bottom_banner['title']): ?>
                    <h2 class="section-title bottom-banner__title"><?= $bottom_banner['title']?></h2>
                <?php endif; ?>
                <?php if ($bottom_banner['subtitle']): ?>
                    <div class="section-subtitle bottom-banner__subtitle"><?= $bottom_banner['subtitle']?></div>
                <?php endif; ?>
            </div>

            <?php if ($bottom_banner['button']):
                $attributes = '';
                if ($bottom_banner['open_modal_btn']){
                    $attributes = 'data-fancybox';
                } else {
                    $attributes = $bottom_banner['button']['target'] ? 'target="'.$bottom_banner['button']['target'].'"' : ' ';
                }?>
                <a
                        href="<?= $bottom_banner['button']['url']?>"
                        class="btn btn--green banner__button"
                        <?= $attributes?>
                >
                    <?= $bottom_banner['button']['title']?>
                </a>
            <?php endif; ?>
        </div>

        <?php if ($bottom_banner['background']): ?>
            <img src="<?= $bottom_banner['background']?>" class="banner__bg" alt="">
        <?php endif; ?>

    </section>

    <?php if ($bottom_banner['open_modal_btn']):
        get_template_part('template-parts/modal-form');
    endif; ?>

<?php endif; ?>

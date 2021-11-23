<?php $top_banner = get_field('top_banner'); ?>
<?php if ($top_banner): ?>
    <section class="banner <?= $args['banner_class'] ? $args['banner_class'] : ''?>">
        <div class="container banner__container">
            <div class="banner__content">
                <?php if ($top_banner['title']): ?>
                    <h1 class="banner__title"><?= $top_banner['title']?></h1>
                <?php endif; ?>
                <?php if ($top_banner['subtitle']): ?>
                    <div class="banner__text"><?= $top_banner['subtitle']?></div>
                <?php endif; ?>
            </div>
            <?php if ($top_banner['button']):
                $attributes = '';
                if ($top_banner['open_modal_btn']){
                    $attributes = 'data-fancybox';
                } else {
                    $attributes = $bottom_banner['button']['target'] ? 'target="'.$bottom_banner['button']['target'].'"' : ' ';
                } ?>
                <a
                        href="<?= $top_banner['button']['url']?>"
                        class="btn banner__button btn--transparent"
                    <?= $attributes?>
                >
                    <?= $top_banner['button']['title']?>
                </a>
            <?php endif; ?>
        </div>
        <?php if ($top_banner['background']): ?>
            <img src="<?= $top_banner['background']?>" class="banner__bg" alt="">
        <?php endif; ?>
    </section>

    <?php if ($bottom_banner['open_modal_btn']):
        get_template_part('template-parts/modal-form');
    endif; ?>
<?php endif; ?>

<?php $bottom_banner = get_field('bottom_banner'); ?>
<?php if (!empty($bottom_banner)): ?>
    <section class="banner bottom-banner">
        <div class="container bottom-banner__container">

            <div class="bottom-banner__content">
                <?php if (!empty($bottom_banner['title'])): ?>
                    <h2 class="section-title bottom-banner__title"><?php echo $bottom_banner['title']?></h2>
                <?php endif; ?>
                <?php if (!empty($bottom_banner['subtitle'])): ?>
                    <div class="section-subtitle bottom-banner__subtitle"><?php echo $bottom_banner['subtitle']?></div>
                <?php endif; ?>
            </div>

            <?php if (!empty($bottom_banner['show_btn'])): ?>
                <a href="<?php echo $bottom_banner['link_btn']?>" class="btn btn--green banner__button"><?php echo $bottom_banner['text_btn']?></a>
            <?php endif; ?>

        </div>

        <?php if (!empty($bottom_banner['background'])): ?>
            <img src="<?php echo $bottom_banner['background']?>" class="banner__bg" alt="">
        <?php endif; ?>

    </section>
<?php endif; ?>

<?php $top_banner = get_field('top_banner'); ?>
<section class="banner banner--big">
    <div class="container banner__container">
        <div class="banner__content">
            <?php if (!empty($top_banner['title'])): ?>
            <h1 class="banner__title"><?php echo $top_banner['title']?></h1>
            <?php endif; ?>
            <?php if (!empty($top_banner['subtitle'])): ?>
            <div class="banner__text"><?php echo $top_banner['subtitle']?></div>
            <?php endif; ?>
        </div>
        <?php if (!empty($top_banner['show_btn'])): ?>
            <a href="<?php echo $top_banner['link_btn']?>" class="btn banner__button btn--transparent"><?php echo $top_banner['text_btn']?></a>
        <?php endif; ?>
    </div>
    <?php if (!empty($top_banner['background'])): ?>
        <img src="<?php echo $top_banner['background']?>" class="banner__bg" alt="">
    <?php endif; ?>
</section>

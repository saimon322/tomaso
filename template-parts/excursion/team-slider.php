<?php $team_slider = get_field('team_slider');?>
<div class="excursion-gallery">
    <div class="container excursion-gallery__wrapper">


        <?php if ($team_slider['subtitle']): ?>
            <div class="excursion-gallery__subheader"><?= $team_slider['subtitle']?></div>
        <?php endif; ?>

        <?php if ($team_slider['title']): ?>
            <div class="excursion-gallery__header"><?= $team_slider['title']?></div>
        <?php endif; ?>

        <?php if ($team_slider['gallery_images']): ?>
            <div class="swiper excursion-gallery__swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($team_slider['gallery_images'] as $image):?>
                        <div class="swiper-slide excursion-gallery__slide">
                            <img src="<?= $image['url']?>" alt="<?= $image['alt']?>" class="excursion-gallery__img">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="excursion-gallery__nav">
            <div class="excursion-gallery__nav-line"></div>
            <div class="excursion-gallery__prev"></div>
            <div class="excursion-gallery__pagination"></div>
            <div class="excursion-gallery__next"></div>
            <div class="excursion-gallery__nav-line"></div>
        </div>

    </div>
</div>

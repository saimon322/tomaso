<?php $excursion_slider = get_field('excursion_slider'); ?>
<?php if ($excursion_slider['slider']): ?>
<div class="excursion-slider">
    <div class="container excursion-slider__wrapper">
        <div class="exursion-slider__left">
            <?php if ($excursion_slider['subtitle']): ?>
                <div class="excursion-slider__subtitle"><?= $excursion_slider['subtitle']?></div>
            <?php endif; ?>

            <?php if ($excursion_slider['title']): ?>
                <div class="excursion-slider__title"><?= $excursion_slider['title']?></div>
            <?php endif; ?>

            <div class="excursion-slider__pagination"></div>
        </div>
        <div class="swiper excursion-slider__swiper">
            <div class="swiper-wrapper">
                <?php foreach ($excursion_slider['slider'] as $key => $slide): ?>

                    <div class="swiper-slide">

                        <?php if ($slide['slide_title']): ?>
                            <div class="excursion-slider__header"><?= $slide['slide_title']?></div>
                        <?php endif; ?>

                        <?php if ($slide['slide_desc']): ?>
                            <div class="excursion-slider__text"><?= $slide['slide_desc']?></div>
                        <?php endif; ?>

                        <?php if ($slide['slide_image']): ?>
                            <img src="<?= $slide['slide_image']?>" alt="" class="excursion-slider__img">
                        <?php endif; ?>

                    </div>

                <?php endforeach;?>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>

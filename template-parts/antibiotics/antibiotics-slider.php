<?php $slider_section = get_field('slider_section');?>
<?php if ($slider_section): ?>
    <?php if ($slider_section['title']): ?>
        <section class="why">
            <div class="container">
                <div class="why__header"><?= $slider_section['title']?></div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($slider_section['slider']): ?>
        <div class="antibio-slider">
            <div class="antibio-slider__swiper swiper">
                <div class="antibio-slider__pagination"></div>
                <div class="swiper-wrapper">
                    <?php foreach ($slider_section['slider'] as $key => $slide):?>

                        <div class="antibio-slider__slide swiper-slide">
                            <div class="antibio-slider__content">
                                <div class="antibio-slider__subheader"><span><?= sprintf("%02d", $key+1);?>.</span></div>

                                <?php if ($slide['slide_title']): ?>
                                    <div class="antibio-slider__header"><?= $slide['slide_title']?></div>
                                <?php endif; ?>

                                <?php if ($slide['slide_desc']): ?>
                                    <div class="antibio-slider__text"><?= $slide['slide_desc']?></div>
                                <?php endif; ?>

                            </div>

                            <?php if ($slide['slide_image']): ?>
                                <img src="<?= $slide['slide_image']?>" alt="" class="antibio-slider__img">
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php endif; ?>

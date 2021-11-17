<?php $slider_section = get_field('slider_section');?>
<?php if (!empty($slider_section)): ?>
    <?php if (!empty($slider_section['title'])): ?>
        <section class="why">
            <div class="container">
                <div class="why__header"><?php echo $slider_section['title']?></div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($slider_section['slider'])): ?>
        <div class="antibio-slider">
            <div class="antibio-slider__swiper swiper">
                <div class="antibio-slider__pagination"></div>
                <div class="swiper-wrapper">
                    <?php foreach ($slider_section['slider'] as $key => $slide):?>

                        <div class="antibio-slider__slide swiper-slide">
                            <div class="antibio-slider__content">
                                <div class="antibio-slider__subheader"><span><?php echo sprintf("%02d", $key+1);?>.</span></div>

                                <?php if (!empty($slide['slide_title'])): ?>
                                    <div class="antibio-slider__header"><?php echo $slide['slide_title']?></div>
                                <?php endif; ?>

                                <?php if (!empty($slide['slide_desc'])): ?>
                                    <div class="antibio-slider__text"><?php echo $slide['slide_desc']?></div>
                                <?php endif; ?>

                            </div>

                            <?php if (!empty($slide['slide_image'])): ?>
                                <img src="<?php echo $slide['slide_image']?>" alt="" class="antibio-slider__img">
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php endif; ?>

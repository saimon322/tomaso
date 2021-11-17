<?php $front_sliders = get_field('front_sliders');?>
<?php if (!empty($front_sliders)):
    foreach ($front_sliders as $key => $slider):
        $slider_class = '';
        if ($key == 0) $slider_class = 'top';
        if ($key == 1) $slider_class = 'middle';
        if ($key == 2) $slider_class = 'bottom';
        ?>
        <section class="slider slider--main-vertical slider--main-vertical-<?php echo $slider_class?> <?php echo $key % 2 !== 0 ? 'slider--main-vertical--reverse' : '';?>">
            <div class="container slider__container">

                <div class="slider__content">
                    <?php if (!empty($slider['subtitle'])): ?>
                        <div class="section-subtitle"><?php echo $slider['subtitle']?></div>
                    <?php endif;
                    if (!empty($slider['title'])): ?>
                        <h2 class="section-title "><?php echo $slider['title']?></h2>
                    <?php endif;
                    if (!empty($slider['description'])): ?>
                        <div class="meat_about__text"><?php echo $slider['description']?></div>
                    <?php endif;
                    if (!empty($slider['link_btn']) && !empty($slider['text_btn'])): ?>
                        <a href="<?php echo $slider['link_btn']?>" class="btn btn--grey-borders btn--desktop slider__btn"><?php echo $slider['text_btn']?></a>
                    <?php endif; ?>
                </div>
                <?php if (!empty($slider['slider'])):?>
                    <div class="swiper swiper-slider swiper-container ">
                        <div class="swiper-wrapper">
                            <?php foreach ($slider['slider'] as $slide):?>

                            <div class="swiper-slide">
                                <div class="slide_image">
                                    <img src="<?php echo $slide['slide_image']?>" alt="">
                                </div>
                            </div>

                            <?php endforeach;?>

                        </div>

                        <div class="main-vertical__nav">
                            <div class="main-vertical__prev main-vertical-<?php echo $slider_class?>__prev"></div>

                            <div class="main-vertical__pagination main-vertical-<?php echo $slider_class?>__pagination"></div>

                            <div class="main-vertical__next main-vertical-<?php echo $slider_class?>__next"></div>
                        </div>

                    </div>
                <?php endif; ?>

                <?php if (!empty($slider['link_btn']) && !empty($slider['text_btn'])): ?>
                    <a href="<?php echo $slider['link_btn']?>" class="btn btn--grey-borders btn--mobile"><?php echo $slider['text_btn']?></a>
                <?php endif; ?>

            </div>

        </section>
    <?php endforeach;
endif; ?>

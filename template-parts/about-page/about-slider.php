<?php $about_slider = get_field('about_slider');?>
<?php if (!empty($about_slider)): ?>
    <section class="about--slider">
        <div class="swiper about--slider__content--center about--slider__slider">
            <div class="about--slider__pagination"></div>
            <div class="swiper-wrapper">
                <?php foreach ($about_slider as $key => $slide): ?>
                    <div class="container about--slider_wrapper swiper-slide">
                        <?php if (!empty($slide['image'])): ?>
                            <img src="<?php echo $slide['image']?>" alt="" class="about--slider__image">
                        <?php endif; ?>
                        <div class="about--slider__content about--slider__content--center">
                            <div class="about--slider__subheader"><span><?php echo sprintf("%02d", $key+1);?></span></div>
                            <?php if (!empty($slide['title'])): ?>
                                <h2 class="about--slider__header"><?php echo $slide['title']?></h2>
                            <?php endif; ?>
                            <?php if (!empty($slide['image'])): ?>
                                <img src="<?php echo $slide['image']?>" alt="" class="about--slider__content-image">
                            <?php endif; ?>
                            <?php if (!empty($slide['text'])): ?>
                                <div class="about--slider__text"><?php echo $slide['text']?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif; ?>

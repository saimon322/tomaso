<?php $about_slider = get_field('about_slider');?>
<?php if ($about_slider): ?>
    <section class="about--slider<?= $about_slider['block_header'] ? ' farm__slider' : ''?>">
        <div class="swiper about--slider__content--center about--slider__slider">

            <?php if ($about_slider['block_header']): ?>

                <?php if ($about_slider['subtitle']): ?>
                    <div class="about--slider__subtitle"><?= $about_slider['subtitle']?></div>
                <?php endif; ?>

                <?php if ($about_slider['title']): ?>
                    <div class="about--slider__title"><?= $about_slider['title']?></div>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($about_slider['slider']): ?>

                <div class="about--slider__pagination"></div>
                <div class="swiper-wrapper">
                    <?php foreach ($about_slider['slider'] as $key => $slide): ?>
                        <div class="about--slider__slide swiper-slide">
                            <div class="about--slider__slide-wrapper container">

                                <?php if ($slide['image']): ?>
                                    <img src="<?= $slide['image']['url']?>" alt="<?= $slide['image']['alt']?>" class="about--slider__image">
                                <?php endif; ?>

                                <div class="about--slider__content about--slider__content--center">

                                    <div class="about--slider__subheader"><span><?= sprintf("%02d", $key+1);?></span></div>

                                    <?php if ($slide['title']): ?>
                                        <h2 class="about--slider__header"><?= $slide['title']?></h2>
                                    <?php endif; ?>

                                    <?php if ($slide['image']): ?>
                                        <img src="<?= $slide['image']['url']?>" alt="<?= $slide['image']['alt']?>" class="about--slider__content-image">
                                    <?php endif; ?>

                                    <?php if ($slide['text']): ?>
                                        <div class="about--slider__text"><?= $slide['text']?></div>
                                    <?php endif; ?>

                                </div>
                            
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

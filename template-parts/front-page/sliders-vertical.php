<?php $front_sliders = get_field('front_sliders');?>
<?php if ($front_sliders):
    foreach ($front_sliders as $key => $slider):
        $slider_class = '';
        if ($key == 0) $slider_class = 'top';
        if ($key == 1) $slider_class = 'middle';
        if ($key == 2) $slider_class = 'bottom';
        ?>
        <section class="slider slider--main-vertical slider--main-vertical-<?= $slider_class, $key % 2 !== 0 ? ' slider--main-vertical--reverse' : '';?>">
            <div class="container-small slider__container">

                <div class="slider__content">
                    <?php if ($slider['subtitle']): ?>
                        <div class="section-subtitle"><?= $slider['subtitle']?></div>
                    <?php endif;
                    if ($slider['title']): ?>
                        <h2 class="section-title "><?= $slider['title']?></h2>
                    <?php endif;
                    if ($slider['description']): ?>
                        <div class="meat_about__text"><?= $slider['description']?></div>
                    <?php endif;
                    if ($slider['button']): ?>
                    <a
                            href="<?= $slider['button']['url']?>"
                            class="btn btn--grey-borders btn--desktop slider__btn"
                        <?= $slider['button']['target'] ? 'target="'.$slider['button']['target'].'"' : ' '?>
                    >
                        <?= $slider['button']['title']?>
                    </a>
                    <?php endif; ?>
                </div>
                <?php if ($slider['slider']):?>
                    <div class="swiper swiper-slider swiper-container ">
                        <div class="swiper-wrapper">
                            <?php foreach ($slider['slider'] as $slide):?>

                            <div class="swiper-slide">
                                <div class="slide_image">
                                    <img src="<?= $slide['slide_image']?>" alt="">
                                </div>
                            </div>

                            <?php endforeach;?>

                        </div>
                    </div>

                    <div class="main-vertical__nav">
                        <div class="main-vertical__prev main-vertical-<?= $slider_class?>__prev"></div>

                        <div class="main-vertical__pagination main-vertical-<?= $slider_class?>__pagination"></div>

                        <div class="main-vertical__next main-vertical-<?= $slider_class?>__next"></div>
                    </div>

                <?php endif; ?>

                <?php if ($slider['button']): ?>
                    <a
                            href="<?= $slider['button']['url']?>"
                            class="btn btn--grey-borders btn--mobile"
                        <?= $slider['button']['target'] ? 'target="'.$slider['button']['target'].'"' : ' '?>
                    >
                        <?= $slider['button']['title']?>
                    </a>
                <?php endif; ?>

            </div>

        </section>
    <?php endforeach;
endif; ?>

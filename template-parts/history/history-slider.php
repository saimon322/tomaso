<?php $history_slider = get_field('history_slider');?>
<?php if ($history_slider): ?>
    <div class="history-slider">
        <div class="container history-slider__wrapper">

            <?php if ($history_slider['title']): ?>
                <div class="history-slider__title"><?= $history_slider['title']?></div>
            <?php endif; ?>

            <?php if ($history_slider['slider']): ?>
                <div class="history-slider__pagination"></div>

                <div class="swiper history-slider__swiper">
                    <div class="swiper-wrapper">

                        <?php foreach ($history_slider['slider'] as $slide):?>
                            <div class="swiper-slide history-slider__slide">

                                <?php if ($slide['subtitle']): ?>
                                    <div class="history-slider__subheader"><?= $slide['subtitle']?></div>
                                <?php endif; ?>

                                <?php if ($slide['title']): ?>
                                    <div class="history-slider__header"><?= $slide['title']?></div>
                                <?php endif; ?>

                                <?php if ($slide['image']): ?>
                                    <img src="<?= $slide['image']['url']?>" alt="<?= $slide['image']['alt']?>" class="history-slider__img">
                                <?php endif; ?>

                                <?php if ($slide['description']): ?>
                                    <div class="history-slider__text"><?= $slide['description']?></div>
                                <?php endif; ?>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

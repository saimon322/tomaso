<?php $attitude = get_field('attitude');?>
<?php if ($attitude): ?>
<section class="attitude">
    <div class="container">
        <?php if ($attitude['subtitle']): ?>
            <div class="section-subtitle section-subtitle--center"><?= $attitude['subtitle']?></div>
        <?php endif; ?>
        <?php if ($attitude['title']): ?>
            <h2 class="section-title section-title--center"><?= $attitude['title']?></h2>
        <?php endif; ?>

        <?php if ($attitude['slider']): ?>
            <div class="attitude__block attitude_slider swiper">
                <div class="swiper-wrapper">

                    <?php foreach ($attitude['slider'] as $slide):?>
                        <div class="attitude__item swiper-slide">

                            <?php if ($slide['slider_Image']): ?>
                                <div class="attitude__item-image">
                                    <img src="<?= $slide['slider_Image']?>" alt="">
                                </div>
                            <?php endif; ?>

                            <?php if ($slide['slider_title']): ?>
                                <div class="attitude__item-title">
                                    <?= $slide['slider_title']?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="attitude_slider__pagination"></div>
            </div>
        <?php endif; ?>

        <?php if ($attitude['description']): ?>
            <div class="attitude__description">
                <?= $attitude['description']?>
            </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>

<?php $section_green = get_field('section-green');?>
<?php if (!empty($section_green)): ?>
    <section class="banner-green">

        <?php if (!empty($section_green['top_subtitle'])): ?>
            <div class="banner-green__top-subtitle"><?php echo $section_green['top_subtitle']?></div>
        <?php endif; ?>

        <?php if (!empty($section_green['title'])): ?>
            <h2 class="banner-green__title"><?php echo $section_green['title']?></h2>
        <?php endif; ?>

        <?php if (!empty($section_green['bottom_subtitle'])): ?>
            <div class="banner-green__bottom-subtitle"><?php echo $section_green['bottom_subtitle']?></div>
        <?php endif; ?>

        <?php if (!empty($section_green['down_btn'])): ?>
            <div class="banner-green__circle">
                <svg width="16px" height="15px">
                    <use xlink:href="#circle_arrow--down"></use>
                </svg>
            </div>
        <?php endif; ?>

    </section>
<?php endif; ?>

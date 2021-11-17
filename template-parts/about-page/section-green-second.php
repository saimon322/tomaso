<?php $section_green_2 = get_field('section-green_2');?>
<?php if (!empty($section_green_2)): ?>
    <section class="banner-green green--small-padding">
        <?php if (!empty($section_green_2['title'])): ?>
            <h2 class="banner-green__title"><?php echo $section_green_2['title']?></h2>
        <?php endif; ?>
    </section>
<?php endif; ?>

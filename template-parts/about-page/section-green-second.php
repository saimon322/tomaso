<?php $section_green_2 = get_field('section-green_2');?>
<?php if ($section_green_2): ?>
    <section class="banner-green green--small-padding">
        <?php if ($section_green_2['title']): ?>
            <h2 class="banner-green__title"><?= $section_green_2['title']?></h2>
        <?php endif; ?>
    </section>
<?php endif; ?>

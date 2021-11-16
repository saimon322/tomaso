<?php $section_green_2 = get_field('section-green_2');?>
<section class="green green--small-padding">
    <?php if (!empty($section_green_2['title'])): ?>
        <h2 class="green__title"><?php echo $section_green_2['title']?></h2>
    <?php endif; ?>
</section>
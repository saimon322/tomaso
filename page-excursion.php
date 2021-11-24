<?php
/*
* Template Name: Экскурсия на ферму
*/
get_header('', array('header_class' => 'header--black')); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner', '', array('banner_class' => 'banner--big'));

    get_template_part('template-parts/excursion/excursion-slider');

    get_template_part('template-parts/excursion/included');

    get_template_part('template-parts/section-green');

    get_template_part('template-parts/excursion/team-slider');

    get_template_part('template-parts/excursion/info-numbers');

    get_template_part('template-parts/excursion/publications');

    get_template_part('template-parts/bottom-banner', '', array('class' => 'bottom-banner--excursion'));
    ?>

</main>
<?php get_footer(); ?>

<?php
/*
* Template Name: Экскурсия на ферму
*/
get_header(); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner');

    get_template_part('template-parts/excursion/excursion-slider');

    get_template_part('template-parts/excursion/included');

//    get_template_part('template-parts/bottom-banner');
    ?>

</main>
<?php get_footer(); ?>

<?php
/*
* Template Name: О мясе
*/
get_header(); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner');

    get_template_part('template-parts/about');

    get_template_part('template-parts/section-green');

    get_template_part('template-parts/about-slider');

    get_template_part('template-parts/products-slider');

    get_template_part('template-parts/about-page/section-green-second');

    get_template_part('template-parts/where-buy');

    get_template_part('template-parts/about-page/culture');

    get_template_part('template-parts/bottom-banner');
    ?>

</main>
<?php get_footer(); ?>

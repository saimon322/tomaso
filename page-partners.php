<?php
/*
* Template Name: Партнерам
*/
get_header('', array('header_class' => 'header--black')); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner');

    get_template_part('template-parts/about');

    get_template_part('template-parts/section-green');

    get_template_part('template-parts/about', '', array('number' => '_2'));

    get_template_part('template-parts/bottom-banner');
    ?>

</main>
<?php get_footer(); ?>

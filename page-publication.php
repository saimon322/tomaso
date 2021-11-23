<?php
/*
* Template Name: Tomaso в СМИ
*/
get_header(); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner', '', array('banner_class' => 'smi-banner'));

    get_template_part('template-parts/excursion/publications');

    get_template_part('template-parts/bottom-banner');
    ?>

</main>
<?php get_footer(); ?>

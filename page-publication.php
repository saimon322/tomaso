<?php
/*
* Template Name: Tomaso в СМИ
*/
get_header('', array('header_class' => 'header--black')); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner', '', array('banner_class' => 'smi-banner'));

    get_template_part('template-parts/excursion/publications','',array('class_section' => 'publications--up'));

    get_template_part('template-parts/bottom-banner');
    ?>

</main>
<?php get_footer(); ?>

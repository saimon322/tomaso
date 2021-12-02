<?php
/*
* Template Name: Антибиотики
*/
get_header(); ?>
<main class="main">

    <?php
    get_template_part('template-parts/main-banner');

    get_template_part('template-parts/about','', array('section_class' => 'about--green-circle'));

    get_template_part('template-parts/antibiotics/antibiotics-slider');

    get_template_part('template-parts/antibiotics/antibiotics-harm');

    get_template_part('template-parts/antibiotics/antibiotics-resist');

    get_template_part('template-parts/antibiotics/antibiotics-texts');

    get_template_part('template-parts/section-green');

    get_template_part('template-parts/antibiotics/antibiotics-fact');

    get_template_part('template-parts/antibiotics/examination-meat');

    get_template_part('template-parts/bottom-banner');
    ?>

</main>
<?php get_footer(); ?>

<?php
/*
* Template Name: Контакты
*/
get_header(); ?>
<main class="main main--contacts">

    <?php
    get_template_part('template-parts/main-banner', '', array('banner_class' => 'banner--contact'));

    get_template_part('template-parts/contacts/map');

    get_template_part('template-parts/where-buy');

    get_template_part('template-parts/contacts/contact-form');
    ?>

</main>
<?php get_footer(); ?>

<?php
get_header();?>

    <main class="main">

        <?php
        get_template_part('template-parts/main-banner', '', array('banner_class' => 'banner--big'));

        get_template_part('template-parts/front-page/meat-about');

        get_template_part('template-parts/products-slider');

        get_template_part('template-parts/where-buy');

        get_template_part('template-parts/section-green');

        get_template_part('template-parts/front-page/sliders-vertical');

        get_template_part('template-parts/bottom-banner');
        ?>

    </main>

<?php
get_footer();

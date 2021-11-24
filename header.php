<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header <?=$args['header_class'] ? $args['header_class'] : ''?>">
    <div class="container">
        <div class="header__content">
            <a href="/" class="header__logo">
                <svg width="80" height="27">
                    <use xlink:href="#logo_text"></use>
                </svg>
                <svg width="65" height="30">
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
            <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
                <nav class="header__nav nav">
                    <?php
                    // Primary navigation menu.
                    wp_nav_menu( array(
                        'menu_class'     => 'nav__list',
                        'theme_location' => 'header-menu',
                        'container'      => '',
                        'walker'         => new HeaderWalker(),
                        ) );
                    ?>
                </nav><!-- .main-navigation -->
            <?php endif; ?>

            <div class="hamburger">
                <svg width="24" height="24">
                    <use xlink:href="#hamburger"></use>
                </svg>
            </div>
        </div>
    </div>
</header><!-- / .header -->


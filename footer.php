<?php $footer_settings = get_field('footer_settings','option');?>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                <div class="footer__menu">
                    <nav class="footer-nav">
                        <?php
                        // Primary navigation menu.
                        wp_nav_menu( array(
                            'menu_class'     => 'footer-nav__list',
                            'theme_location' => 'footer-menu',
                            'container'      => '',
                        ) );
                        ?>

                    </nav>
                </div>
            <?php endif; ?>

            <div class="footer__contacts">
                <div class="footer__links">
                    <?php if (!empty($footer_settings['phone_number'])): ?>
                        <a href="tel:<?= $footer_settings['phone_number']?>"><?= $footer_settings['phone_number']?></a>
                    <?php endif; ?>
                    <?php if (!empty($footer_settings['email'])): ?>
                        <a href="mailto:<?= $footer_settings['email']?>"><?= $footer_settings['email']?></a>
                    <?php endif; ?>
                </div>

                <?php if (!empty($footer_settings['address'])):
                    if (function_exists('pll__')) {
                        echo '<p class="footer__address">'.pll__($footer_settings['address']).'</p>';
                    } else {
                        echo '<p class="footer__address">'.$footer_settings['address'].'</p>';
                    }
                endif; ?>

            </div>

            <div class="footer__main">
                <a href="/" class="footer__logo">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                <?php if (!empty($footer_settings['copyright'])): ?>
                    <p class="footer__text"><?= $footer_settings['copyright']?></p>
                <?php endif; ?>
                <?php if (!empty($footer_settings['rights'])): ?>
                    <p class="footer__text"><?= $footer_settings['rights']?></p>
                <?php endif; ?>
                <?php if (!empty($footer_settings['designed'])): ?>
                    <p class="footer__text"><?= $footer_settings['designed']?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php get_template_part('template-parts/popup/modal-form'); ?>

<?php wp_footer(); ?>
</body>
</html>
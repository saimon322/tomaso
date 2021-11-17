<?php $texts_section = get_field('texts_section');?>

<?php if ($texts_section): ?>
    <section class="antibio-texts">
        <div class="antibio-texts__wrapper">

            <?php if ($texts_section['subtitle']): ?>
                <div class="container antibio-texts__left"><?= $texts_section['col_left_text']?></div>
            <?php endif; ?>

            <div class="container antibio-texts__right">

                <?php if ($texts_section['subtitle']): ?>
                    <div class="antibio-texts__subheader"><?= $texts_section['subtitle']?></div>
                <?php endif; ?>

                <?php if ($texts_section['title']): ?>
                    <div class="antibio-texts__header"><?= $texts_section['title']?></div>
                <?php endif; ?>

                <?php if ($texts_section['col_right_text']): ?>
                    <div class="antibio-texts__text"><?= $texts_section['col_right_text']?></div>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>

<?php $texts_section = get_field('texts_section');?>

<?php if (!empty($texts_section)): ?>
    <section class="antibio-texts">
        <div class="antibio-texts__wrapper">

            <?php if (!empty($texts_section['subtitle'])): ?>
                <div class="container antibio-texts__left"><?php echo $texts_section['col_left_text']?></div>
            <?php endif; ?>

            <div class="container antibio-texts__right">

                <?php if (!empty($texts_section['subtitle'])): ?>
                    <div class="antibio-texts__subheader"><?php echo $texts_section['subtitle']?></div>
                <?php endif; ?>

                <?php if (!empty($texts_section['title'])): ?>
                    <div class="antibio-texts__header"><?php echo $texts_section['title']?></div>
                <?php endif; ?>

                <?php if (!empty($texts_section['col_right_text'])): ?>
                    <div class="antibio-texts__text"><?php echo $texts_section['col_right_text']?></div>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>

<?php $interesting_fact = get_field('interesting_fact');?>

<?php if ($interesting_fact): ?>
    <div class="antibio-fact">
        <div class="container antibio-fact__wrapper">

            <?php if ($interesting_fact['subtitle']): ?>
                <div class="antibio-fact__subheader"><?= $interesting_fact['subtitle']?></div>
            <?php endif; ?>

            <?php if ($interesting_fact['title']): ?>
                <div class="antibio-fact__header"><?= $interesting_fact['title']?></div>
            <?php endif; ?>

            <?php if ($interesting_fact['description']): ?>
                <div class="antibio-fact__text"><?= $interesting_fact['description']?></div>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>

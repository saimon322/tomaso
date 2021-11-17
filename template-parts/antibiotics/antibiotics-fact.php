<?php $interesting_fact = get_field('interesting_fact');?>

<?php if (!empty($interesting_fact)): ?>
    <div class="antibio-fact">
        <div class="container antibio-fact__wrapper">

            <?php if (!empty($interesting_fact['subtitle'])): ?>
                <div class="antibio-fact__subheader"><?php echo $interesting_fact['subtitle']?></div>
            <?php endif; ?>

            <?php if (!empty($interesting_fact['title'])): ?>
                <div class="antibio-fact__header"><?php echo $interesting_fact['title']?></div>
            <?php endif; ?>

            <?php if (!empty($interesting_fact['description'])): ?>
                <div class="antibio-fact__text"><?php echo $interesting_fact['description']?></div>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>

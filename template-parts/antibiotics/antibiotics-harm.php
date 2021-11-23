<?php $antibiotics_harm = get_field('antibiotics_harm');?>
<?php if ($antibiotics_harm): ?>

    <div class="damage">
        <div class="container damage__wrapper">
            <?php if ($antibiotics_harm['image']): ?>
                <img src="<?= $antibiotics_harm['image']['url']?>" alt="<?= $antibiotics_harm['image']['alt']?>" class="damage__image">
            <?php endif; ?>
            <div class="damage__content">
                <?php if ($antibiotics_harm['subtitle']): ?>
                    <div class="damage__subtitle"><?= $antibiotics_harm['subtitle']?></div>
                <?php endif; ?>

                <?php if ($antibiotics_harm['title']): ?>
                    <div class="damage__title"><?= $antibiotics_harm['title']?></div>
                <?php endif; ?>

                <?php if ($antibiotics_harm['description']): ?>
                    <div class="damage__text"><?= $antibiotics_harm['description']?></div>
                <?php endif; ?>
           </div>
        </div>
    </div>

<?php endif; ?>

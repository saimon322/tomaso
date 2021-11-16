<?php $antibiotics_harm = get_field('antibiotics_harm');?>
<?php if (!empty($antibiotics_harm)): ?>

    <div class="damage">
        <div class="container damage__wrapper">
            <?php if (!empty($antibiotics_harm['image'])): ?>
                <img src="<?php echo $antibiotics_harm['image']?>" alt="" class="damage__image">
            <?php endif; ?>
            <div class="damage__content">
                <?php if (!empty($antibiotics_harm['subtitle'])): ?>
                    <div class="damage__subtitle"><?php echo $antibiotics_harm['subtitle']?></div>
                <?php endif; ?>

                <?php if (!empty($antibiotics_harm['title'])): ?>
                    <div class="damage__title"><?php echo $antibiotics_harm['title']?></div>
                <?php endif; ?>

                <?php if (!empty($antibiotics_harm['description'])): ?>
                    <div class="damage__text"><?php echo $antibiotics_harm['description']?></div>
                <?php endif; ?>
           </div>
        </div>
    </div>

<?php endif; ?>

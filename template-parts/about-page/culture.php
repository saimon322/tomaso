<?php $culture = get_field('culture');?>
<section class="culture">
    <div class="container culture__wrapper">
        <?php if (!empty($culture['image'])): ?>
            <img src="<?php echo $culture['image']?>" alt="" class="culture__image">
        <?php endif; ?>
        <div class="culture__content">
            <?php if (!empty($culture['subtitle'])): ?>
                <div class="culture__subtitle"><?php echo $culture['subtitle']?></div>
            <?php endif; ?>
            <?php if (!empty($culture['title'])): ?>
                <div class="culture__title"><?php echo $culture['title']?></div>
            <?php endif; ?>
            <?php if (!empty($culture['description'])): ?>
                <div class="culture__text"><?php echo $culture['description']?></div>
            <?php endif; ?>
            <?php if (!empty($culture['text_btn']) && !empty($culture['link_btn'])): ?>
                <a class="culture__btn btn btn--transparent btn--grey-borders" href="<?php echo $culture['link_btn']?>"><?php echo $culture['text_btn']?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $meat_about = get_field('meat_about');?>
<?php if (!empty($meat_about)): ?>
<section class="meat_about">
    <div class="container meat_about__wrapper">
        <?php if (!empty($meat_about['image'])): ?>
        <img src="<?php echo $meat_about['image']?>" alt="" class="meat_about__image">
        <?php endif; ?>
        <div class="meat_about__content">
            <?php if (!empty($meat_about['subtitle'])): ?>
                <div class="section-subtitle"><?php echo $meat_about['subtitle']?></div>
            <?php endif; ?>
            <?php if (!empty($meat_about['title'])): ?>
                <h2 class="section-title"><?php echo $meat_about['title']?></h2>
            <?php endif; ?>
            <?php if (!empty($meat_about['desc'])): ?>
                <div class="meat_about__text"><?php echo $meat_about['desc']?></div>
            <?php endif; ?>
            <?php if (!empty($meat_about['list'])): ?>
                <ul class="meat_about__list">
                    <?php foreach ($meat_about['list'] as $key => $list_item):?>
                        <li class="list_item"><span><?php echo sprintf("%02d", $key+1);?>.</span><?php echo $list_item['list_item']?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if (!empty($meat_about['btn_text']) && !empty($meat_about['btn_link'])): ?>
                <a href="<?php echo $meat_about['btn_link']?>" class="btn btn--grey-borders"><?php echo $meat_about['btn_text']?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>


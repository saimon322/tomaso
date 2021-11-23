<?php $meat_about = get_field('meat_about');?>
<?php if ($meat_about): ?>
<section class="meat_about">
    <div class="container meat_about__wrapper">
        
        <?php if ($meat_about['image']): ?>
        <img src="<?= $meat_about['image']['url']?>" alt="<?= $meat_about['image']['alt']?>" class="meat_about__image">
        <?php endif; ?>

        <div class="meat_about__content">

            <?php if ($meat_about['subtitle']): ?>
                <div class="section-subtitle"><?= $meat_about['subtitle']?></div>
            <?php endif; ?>

            <?php if ($meat_about['title']): ?>
                <h2 class="section-title"><?= $meat_about['title']?></h2>
            <?php endif; ?>

            <?php if ($meat_about['desc']): ?>
                <div class="meat_about__text"><?= $meat_about['desc']?></div>
            <?php endif; ?>

            <?php if ($meat_about['list']): ?>
                <ul class="meat_about__list">
                    <?php foreach ($meat_about['list'] as $key => $list_item):?>
                        <li class="list_item"><span><?= sprintf("%02d", $key+1);?>.</span><?= $list_item['list_item']?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if ($meat_about['button']): ?>
                <a
                        href="<?= $meat_about['button']['url']?>"
                        class="btn btn--grey-borders"
                    <?= $meat_about['button']['target'] ? 'target="'.$meat_about['button']['target'].'"' : ' '?>
                >
                    <?= $meat_about['button']['title']?>
                </a>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>


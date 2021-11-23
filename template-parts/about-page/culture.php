<?php $culture = get_field('culture');?>
<?php if ($culture): ?>
    <section class="culture">
        <div class="container culture__wrapper">
            <?php if ($culture['image']): ?>
                <img src="<?= $culture['image']?>" alt="<?= $culture['image']['alt']?>" class="culture__image">
            <?php endif; ?>
            <div class="culture__content">

                <?php if ($culture['subtitle']): ?>
                    <div class="culture__subtitle"><?= $culture['subtitle']?></div>
                <?php endif; ?>

                <?php if ($culture['title']): ?>
                    <div class="culture__title"><?= $culture['title']?></div>
                <?php endif; ?>

                <?php if ($culture['description']): ?>
                    <div class="culture__text"><?= $culture['description']?></div>
                <?php endif; ?>

                <?php if ($culture['button']):?>
                    <a
                            href="<?= $culture['button']['url']?>"
                            class="culture__btn btn btn--transparent btn--grey-borders"
                        <?= $culture['button']['target'] ? 'target="'.$culture['button']['target'].'"' : ' '?>
                    >
                        <?= $culture['button']['title']?>
                    </a>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>

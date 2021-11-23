<?php $included_excursion = get_field('included_excursion');?>
<?php if ($included_excursion): ?>
    <section class="included">
        <div class="container included__wrapper">
            <div class="included__content">

                <?php if ($included_excursion['image']): ?>
                    <img src="<?= $included_excursion['image']['url']?>" alt="<?= $included_excursion['image']['alt']?>" class="included__img">
                <?php endif; ?>
                <div class="included__texts">

                    <?php if ($included_excursion['title']): ?>
                        <h2 class="included__header"><?= $included_excursion['title']?></h2>
                    <?php endif; ?>

                    <div class="included__line"></div>
                    <?php foreach ($included_excursion['steps'] as $step):?>
                        <p><?= $step['excursion_step']?></p>
                    <?php endforeach; ?>

                    <?php if ($included_excursion['button']): ?>
                        <a
                                href="<?= $included_excursion['button']['url']?>"
                                class="btn btn--transparent btn--green-borders included__btn"
                            <?= $included_excursion['button']['target'] ? 'target="'.$included_excursion['button']['target'].'"' : ' '?>
                        >
                            <?= $included_excursion['button']['title']?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

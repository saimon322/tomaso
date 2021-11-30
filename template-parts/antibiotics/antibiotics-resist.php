<?php
$antibio_banner = get_field('antibio_banner');
$antibio_resist = get_field('antibio_resist');
if ($antibio_banner): ?>
    <section class="antibio-banner">
        <div class="container antibio-banner__wrapper">
            <?php if ($antibio_banner['subtitle']): ?>
                <div class="antibio-banner__subtitle"><?= $antibio_banner['subtitle']?></div>
            <?php endif; ?>
            <?php if ($antibio_banner['title']): ?>
                <div class="antibio-banner__title"><?= $antibio_banner['title']?></div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php if ($antibio_resist): ?>

    <section class="meat_about antibio-resist">
        <div class="meat_about__wrapper antibio-resist__wrapper">

            <?php if ($antibio_resist['image']): ?>
                <img src="<?= $antibio_resist['image']['url']?>" alt="<?= $antibio_resist['image']['alt']?>" class="meat_about__image antibio-resist__image">
            <?php endif; ?>

            <div class="meat_about__content container antibio-resist__content">

                <?php if ($antibio_resist['subtitle']): ?>
                    <div class="section-subtitle"><?= $antibio_resist['subtitle']?></div>
                <?php endif; ?>

                <?php if ($antibio_resist['title']): ?>
                    <h2 class="section-title"><?= $antibio_resist['title']?></h2>
                <?php endif; ?>

                <?php if ($antibio_resist['causes']): ?>
                <ul class="meat_about__list">

                    <?php foreach ($antibio_resist['causes'] as $key => $cause): ?>
                    <li class="list_item">
                        <span><?= sprintf("%02d", $key+1);?>.</span>
                        <?= $cause['cause']?>
                    </li>
                    <?php endforeach; ?>

                </ul>
                <?php endif; ?>

                <?php if ($antibio_resist['text']): ?>
                    <div class="meat_about__text"><?= $antibio_resist['text']?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

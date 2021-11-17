<?php $antibio_banner = get_field('antibio_banner');?>
<?php $antibio_resist = get_field('antibio_resist');?>
<?php if (!empty($antibio_banner)): ?>
    <section class="antibio-banner">
        <div class="container antibio-banner__wrapper">
            <?php if (!empty($antibio_banner['subtitle'])): ?>
                <div class="antibio-banner__subtitle"><?php echo $antibio_banner['subtitle']?></div>
            <?php endif; ?>
            <?php if (!empty($antibio_banner['title'])): ?>
                <div class="antibio-banner__title"><?php echo $antibio_banner['title']?></div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php if (!empty($antibio_resist)): ?>

    <section class="meat_about antibio-resist">
        <div class="meat_about__wrapper antibio-resist__wrapper">

            <?php if (!empty($antibio_resist['image'])): ?>
                <img src="<?php echo $antibio_resist['image']?>" alt="" class="meat_about__image antibio-resist__image">
            <?php endif; ?>

            <div class="meat_about__content container antibio-resist__content">

                <?php if (!empty($antibio_resist['subtitle'])): ?>
                    <div class="section-subtitle"><?php echo $antibio_resist['subtitle']?></div>
                <?php endif; ?>

                <?php if (!empty($antibio_resist['title'])): ?>
                    <h2 class="section-title"><?php echo $antibio_resist['title']?></h2>
                <?php endif; ?>

                <?php if (!empty($antibio_resist['causes'])): ?>
                <ul class="meat_about__list">

                    <?php foreach ($antibio_resist['causes'] as $key => $cause): ?>
                    <li class="list_item">
                        <span><?php echo sprintf("%02d", $key+1);?>.</span>
                        <?php echo $cause['cause']?>
                    </li>
                    <?php endforeach; ?>

                </ul>
                <?php endif; ?>

                <?php if (!empty($antibio_resist['text'])): ?>
                    <div class="meat_about__text"><?php echo $antibio_resist['text']?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

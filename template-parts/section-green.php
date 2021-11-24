<?php $section_green = get_field('section-green' . ($args['n'] ? $args['n'] : '')); ?>
<?php if ($section_green):
    $classes = '';
    if ($args['n']) {
        $classes = 'banner-green--small-padding';
    }
    if ($section_green['show_blocks']) {
        $classes .= ' banner-green--two-blocks';
    }?>
    <section class="banner-green <?= $classes?>">

        <?php if ($section_green['top_subtitle']): ?>
            <div class="banner-green__top-subtitle"><?= $section_green['top_subtitle']?></div>
        <?php endif; ?>

        <?php if ($section_green['title']): ?>
            <h2 class="banner-green__title"><?= $section_green['title']?></h2>
        <?php endif; ?>

        <?php if ($section_green['bottom_subtitle']): ?>
            <div class="banner-green__bottom-subtitle"><?= $section_green['bottom_subtitle']?></div>
        <?php endif; ?>

        <?php if ($section_green['down_btn']): ?>
            <div class="banner-green__circle">
                <svg width="16px" height="15px">
                    <use xlink:href="#circle_arrow--down"></use>
                </svg>
            </div>
        <?php endif; ?>

        <?php if ($section_green['white_btn']): ?>
            <a
                    href="<?= $section_green['white_btn']['url']?>"
                    class="btn btn--white"
                <?= $section_green['white_btn']['target'] ? 'target="'.$section_green['white_btn']['target'].'"' : ' '?>
            >
                <?= $section_green['white_btn']['title']?>
            </a>
        <?php endif; ?>

        <?php if ($section_green['blocks']):?>
            <div class="banner-green__two-blocks">
                <?php foreach ($section_green['blocks'] as $key => $block):?>
                    <div class="banner-green__two-blocks-content">
                        <div class="banner-green__two-blocks-texts">
                            <div class="banner-green__two-blocks-number"><?= sprintf("%02d", $key+1);?>.</div>

                            <?php if ($block['title']): ?>
                                <div class="banner-green__two-blocks-header"><?= $block['title']?></div>
                            <?php endif; ?>

                        </div>

                        <?php if ($block['button']): ?>
                            <a
                                    href="<?= $block['button']['url']?>"
                                    class="btn btn--transparent btn--green-borders banner-green__two-blocks-button"
                                <?= $block['button']['target'] ? 'target="'.$block['button']['target'].'"' : ' '?>
                            >
                                <?= $block['button']['title']?>
                            </a>
                        <?php endif; ?>

                    </div>
                <?php endforeach;?>
            </div>
        <?php endif; ?>

    </section>

    <?php if ($section_green['show_blocks']):?>
        <section class="two-facts-mobile">
            <?php if ($section_green['blocks']):?>
                <div class="container-small two-facts-mobile__wrapper">
                    <?php foreach ($section_green['blocks'] as $key => $block):?>
                        <div class="two-facts-mobile__fact">
                            <div class="two-facts-mobile__number"><?= sprintf("%02d", $key+1);?>.</div>

                            <?php if ($block['title']): ?>
                                <div class="two-facts-mobile__header"><?= $block['title']?></div>
                            <?php endif; ?>

                            <?php if ($block['button']): ?>
                                <a
                                        href="<?= $block['button']['url']?>"
                                        class="btn btn--transparent btn--green-borders two-facts-mobile__button"
                                    <?= $block['button']['target'] ? 'target="'.$block['button']['target'].'"' : ' '?>
                                >
                                    <?= $block['button']['title']?>
                                </a>
                            <?php endif; ?>

                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>

        </section>
    <?php endif; ?>

<?php endif; ?>
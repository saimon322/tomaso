<?php $about_us = get_field('about_us'. ($args['number'] ? $args['number'] : '')); ?>
<?php if ($about_us):
    $classes = [];
    if ($about_us['right_image']) {
        $classes = [
             'section' => ' about--farm',
             'image'   => ' about_image--reverse',
             'content' => ' about_content--reverse',
        ];
    }
    if ($about_us['titles_top']) {
        $classes = [
            'section' => ' about--content-text',
        ];
    }
    if ($args['section_class'] == 'about--green-circle') {
        $classes = [
            'section' => ' about--green-circle',
        ];
    }
    ?>
    <section class="about<?= $classes['section']?>">

        <?php if ($args['section_class'] == 'about--green-circle') {?>
            <div class="products_marker about__green-circle">
                <img src="<?= get_template_directory_uri()?>/assets/dist/img/icons/antibiotic_marker.svg" alt="">
            </div>
        <?php }?>

        <?php if ($about_us['titles_top']): ?>
            <div class="about_head">
                <div class="container">
                    <?php if ($about_us['subtitle']): ?>
                        <div class="about_subheader"><?= $about_us['subtitle']?></div>
                    <?php endif; ?>

                    <?php if ($about_us['title']): ?>
                        <h2 class="about_header"><?= $about_us['title']?></h2>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="container about_wrapper">
            <?php if ($about_us['image']): ?>
                <img src="<?= $about_us['image']['url']?>" alt="<?= $about_us['image']['alt']?>" class="about_image<?= $classes['image']?>">
            <?php endif; ?>
            <div class="about_content<?= $classes['content']?>">
                <?php if (!$about_us['titles_top']): ?>

                    <?php if ($about_us['subtitle']): ?>
                        <div class="about_subheader"><?= $about_us['subtitle']?></div>
                    <?php endif; ?>

                    <?php if ($about_us['title']): ?>
                        <h2 class="about_header"><?= $about_us['title']?></h2>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if ($about_us['description']): ?>
                    <div class="about_text"><?= $about_us['description']?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


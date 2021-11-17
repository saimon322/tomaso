<?php $about_us = get_field('about_us'); ?>
<?php if ($about_us):
    $classes = [];
    if ($about_us['right_image']) {
        $classes = [
             'section' => ' about--farm',
             'image'   => ' about_image--reverse',
             'content' => ' about_content--reverse',
        ];
    }
    ?>
    <section class="about<?= $classes['section']?>">
        <div class="container about_wrapper">
            <?php if ($about_us['image']): ?>
                <img src="<?= $about_us['image']?>" alt="" class="about_image<?= $classes['image']?>">
            <?php endif; ?>
            <div class="about_content<?= $classes['content']?>">
                <?php if ($about_us['subtitle']): ?>
                    <div class="about_subheader"><?= $about_us['subtitle']?></div>
                <?php endif; ?>
                <?php if ($about_us['title']): ?>
                    <h2 class="about_header"><?= $about_us['title']?></h2>
                <?php endif; ?>
                <?php if ($about_us['description']): ?>
                    <div class="about_text"><?= $about_us['description']?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


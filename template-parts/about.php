<?php $about_us = get_field('about_us'); ?>
<?php if (!empty($about_us)):
    $classes = [];
    if (!empty($about_us['right_image'])) {
        $classes = [
             'section' => ' about--farm',
             'image'   => ' about_image--reverse',
             'content' => ' about_content--reverse',
        ];
    }
    ?>
    <section class="about<?php echo $classes['section']?>">
        <div class="container about_wrapper">
            <?php if (!empty($about_us['image'])): ?>
                <img src="<?php echo $about_us['image']?>" alt="" class="about_image<?php echo $classes['image']?>">
            <?php endif; ?>
            <div class="about_content<?php echo $classes['content']?>">
                <?php if (!empty($about_us['subtitle'])): ?>
                    <div class="about_subheader"><?php echo $about_us['subtitle']?></div>
                <?php endif; ?>
                <?php if (!empty($about_us['title'])): ?>
                    <h2 class="about_header"><?php echo $about_us['title']?></h2>
                <?php endif; ?>
                <?php if (!empty($about_us['description'])): ?>
                    <div class="about_text"><?php echo $about_us['description']?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


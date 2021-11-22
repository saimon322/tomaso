<?php $form_data = get_field('form_data'); ?>
<?php if ($form_data): ?>
    <section class="form form--contact">
        <div class="container form__wrapper">
            <?php if ($form_data['title']): ?>
                <h2 class="form__title"><?= $form_data['title']?></h2>
            <?php endif; ?>

            <?php if ($form_data['shortcode']): ?>
                <?= do_shortcode($form_data['shortcode'])?>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>

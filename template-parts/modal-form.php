<?php $form_data = get_field('form_data'); ?>
<?php if ($form_data): ?>
<div class="form fancyform" id="form-modal">

    <div class="fancyform__modal-logo">
        <svg width="80" height="27">
            <use xlink:href="#logo_text"></use>
        </svg>
        <svg width="65" height="30">
            <use xlink:href="#logo"></use>
        </svg>
    </div>

    <div class="container fancyform__wrapper">
        <div class="form__content">
            <?php if ($form_data['title']): ?>
                <h2 class="form__title fancyform__title"><?= $form_data['title']?></h2>
            <?php endif; ?>

            <?php if ($form_data['shortcode']): ?>
                <?= do_shortcode($form_data['shortcode'])?>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php endif; ?>

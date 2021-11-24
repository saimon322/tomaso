<?php $popup_forms = get_field('popup_forms','option');?>
<?php if ($popup_forms): ?>

    <?php if ($popup_forms['partners_shortcode']): ?>
        <div class="form fancyform" id="form-partners">

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
                    <?php if ($popup_forms['partners_title']): ?>
                        <h2 class="form__title fancyform__title"><?= $popup_forms['partners_title']?></h2>
                    <?php endif; ?>

                    <?= do_shortcode($popup_forms['partners_shortcode'])?>
                </div>
            </div>

        </div>
    <?php endif; ?>

    <?php if ($popup_forms['excursion_shortcode']): ?>

        <div class="form fancyform" id="form-excursion">

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
                    <?php if ($popup_forms['excursion_title']): ?>
                        <h2 class="form__title fancyform__title"><?= $popup_forms['excursion_title']?></h2>
                    <?php endif; ?>

                    <?= do_shortcode($popup_forms['excursion_shortcode'])?>
                </div>
            </div>

        </div>
    <?php endif; ?>

<?php endif; ?>

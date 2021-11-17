<?php $examination_meat = get_field('examination_meat');?>

<?php if (!empty($examination_meat)): ?>
    <div class="howcheck">
        <div class="container howcheck__wrapper">

            <?php if (!empty($examination_meat['title'])): ?>
                <div class="howcheck__title"><?php echo $examination_meat['title']?></div>
            <?php endif; ?>

            <?php foreach ($examination_meat['steps'] as $key => $step): ?>

                <div class="howcheck__step">
                    <div class="howcheck__number"><?php echo sprintf("%02d", $key+1);?>.</div>
                    <div class="howcheck__info">

                        <?php if (!empty($step['exact_method'])): ?>
                            <img src="<?php echo get_template_directory_uri()?>/assets/dist/img/icons/circle-text.svg" alt="" class="howcheck__circle">
                        <?php endif; ?>

                        <?php if (!empty($step['subtitle'])): ?>
                            <div class="howcheck__subheader"><?php echo $step['subtitle']?></div>
                        <?php endif; ?>

                        <?php if (!empty($step['title'])): ?>
                            <h2 class="howcheck__header"><?php echo $step['title']?></h2>
                        <?php endif; ?>

                        <?php if (!empty($step['description'])): ?>
                            <p class="howcheck__text"><?php echo $step['description']?></p>
                        <?php endif; ?>

                        <?php if (!empty($step['link_text']) && !empty($step['link_url'])): ?>
                            <a href="<?php echo $step['link_url']?>" class="howcheck__link"><?php echo $step['link_text']?></a>
                        <?php endif; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>
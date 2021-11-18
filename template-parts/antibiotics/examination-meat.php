<?php $examination_meat = get_field('examination_meat');?>

<?php if ($examination_meat): ?>
    <div class="howcheck">
        <div class="container howcheck__wrapper">

            <?php if ($examination_meat['title']): ?>
                <div class="howcheck__title"><?= $examination_meat['title']?></div>
            <?php endif; ?>

            <?php foreach ($examination_meat['steps'] as $key => $step): ?>

                <div class="howcheck__step">
                    <div class="howcheck__number"><?= sprintf("%02d", $key+1);?>.</div>
                    <div class="howcheck__info">

                        <?php if ($step['exact_method']): ?>
                            <img src="<?= get_template_directory_uri()?>/assets/dist/img/icons/circle-text.svg" alt="" class="howcheck__circle">
                        <?php endif; ?>

                        <?php if ($step['subtitle']): ?>
                            <div class="howcheck__subheader"><?= $step['subtitle']?></div>
                        <?php endif; ?>

                        <?php if ($step['title']): ?>
                            <h2 class="howcheck__header"><?= $step['title']?></h2>
                        <?php endif; ?>

                        <?php if ($step['description']): ?>
                            <p class="howcheck__text"><?= $step['description']?></p>
                        <?php endif; ?>

                        <?php if ($step['link']): ?>
                            <a
                                    href="<?= $step['link']['url']?>"
                                    class="howcheck__link"
                                <?= $step['link']['target'] ? 'target="'.$step['link']['target'].'"' : ' '?>
                            >
                                <?= $step['link']['title']?>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>
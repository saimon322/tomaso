<?php $section_publications = get_field('section_publications');?>
<?php if ($section_publications): ?>
    <div class="publications <?= $args['class_section'] ? $args['class_section'] : ''?>">
        <div class="container-small publications__wrapper">

            <?php if ($section_publications['title']): ?>
                <div class="publications__title"><?= $section_publications['title']?></div>
            <?php endif; ?>

            <?php if ($section_publications['publications']): ?>
                <div class="publications__content">
                    <?php foreach ($section_publications['publications'] as $publication):?>
                        <a href="<?= $publication['publication_link'] ? $publication['publication_link'] : '#'?>" class="publications__link">

                            <?php if ($publication['publication_title']): ?>
                                <div class="publications__header"><?= wp_trim_words( $publication['publication_title'], 10, '...' );?></div>
                            <?php endif; ?>

                            <?php if ($publication['publication_date']): ?>
                                <div class="publications__date"><?= $publication['publication_date']?></div>
                            <?php endif; ?>

                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

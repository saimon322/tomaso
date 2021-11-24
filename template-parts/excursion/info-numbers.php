<?php $info_numbers = get_field('info_numbers');?>
<?php if ($info_numbers): ?>
<div class="info-numbers" <?= $info_numbers['background'] ? 'style="background-image: url('.$info_numbers['background']['url'].')"' : ''?>>
    <div class="container info-numbers__wrapper">

        <?php if ($info_numbers['top_text']): ?>
            <div class="info-numbers__header"><?= $info_numbers['top_text']?></div>
        <?php endif; ?>

        <?php foreach ($info_numbers['points'] as $key => $point):
            $point_class = '';
            if ($key == 0) $point_class = 'info-numbers__point--one';
            if ($key == 1) $point_class = 'info-numbers__point--two';
            if ($key == 2) $point_class = 'info-numbers__point--three';
            if ($key == 3) $point_class = 'info-numbers__point--four';
            ?>
            <div class="info-numbers__point <?= $point_class?>">
                <div class="info-numbers__number">
                    <div class="info-numbers__number-text"><?= sprintf("%02d", $key+1);?></div>
                    <div class="info-numbers__number-line"></div>
                    <?php if ($key == 3):?>
                        <img src="<?= get_template_directory_uri()?>/assets/dist/img/icons/line-arrow.svg" alt="" class="info-numbers__number-arrow">
                    <?php endif; ?>
                </div>
                <?php if ($point['point_text']): ?>
                    <div class="info-numbers__text"><?= $point['point_text']?></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <img src="<?= get_template_directory_uri()?>/assets/dist/img/base/numbers-bg.png" alt="" class="info-numbers__bg">

        <?php if ($info_numbers['bottom_text']): ?>
            <div class="info-numbers__bottom-text"><?= $info_numbers['bottom_text']?></div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

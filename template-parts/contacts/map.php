<?php $contacts_data = get_field('contacts_data');?>
<?php $footer_settings = get_field('footer_settings', 'option');?>
<?php if ($contacts_data): ?>
    <section class="contacts">
        <div class="container contacts__container">
            <?php if ($contacts_data['map_link']): ?>
                <div class="contacts__map">
                    <iframe
                        src="<?= $contacts_data['map_link']?>"
                        style="border:0;" allowfullscreen=""></iframe>
                </div>
            <?php endif; ?>

            <div class="contacts__data">
                <?php if ($contacts_data['addresses']): ?>
                    <?php foreach ($contacts_data['addresses'] as $addresses): ?>

                        <div class="contacts__place">
                            <?php if ($addresses['name']): ?>
                                <div class="contacts__place--name"><?= $addresses['name']?></div>
                            <?php endif; ?>

                            <?php if ($addresses['address']): ?>
                                <div class="contacts__place--address"><?= $addresses['address']?></div>
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="contacts__callback">

                    <?php if ($footer_settings['phone_number']): ?>
                        <a href="tel:<?= $footer_settings['phone_number']?>" class="contacts__callback--phone"><?= $footer_settings['phone_number']?></a>
                    <?php endif; ?>

                    <?php if ($footer_settings['email']): ?>
                        <a href="mailto:<?= $footer_settings['email']?>" class="contacts__callback--email"><?= $footer_settings['email']?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

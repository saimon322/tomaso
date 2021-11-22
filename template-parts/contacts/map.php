<?php $contacts_data = get_field('contacts_data','option'); ?>
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
                <?php if ($contacts_data['phone_number']): ?>
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

                    <?php if ($contacts_data['phone_number']): ?>
                        <a href="tel:<?= $contacts_data['phone_number']?>" class="contacts__callback--phone"><?= $contacts_data['phone_number']?></a>
                    <?php endif; ?>

                    <?php if ($contacts_data['email']): ?>
                        <a href="mailto:<?= $contacts_data['email']?>" class="contacts__callback--email"><?= $contacts_data['email']?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

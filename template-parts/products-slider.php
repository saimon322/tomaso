<?php $products = get_field('products');?>
<section class="products_section">
    <div class="products_marker">
        <img src="<?php echo get_template_directory_uri()?>/assets/dist/img/icons/antibiotic_marker.svg" alt="">
    </div>
    <div class="container">
        <?php if (!empty($products['subtitle'])): ?>
            <div class="section-subtitle section-subtitle--center"><?php echo $products['subtitle']?></div>
        <?php endif; ?>
        <?php if (!empty($products['title'])): ?>
            <h2 class="section-title section-title--center"><?php echo $products['title']?></h2>
        <?php endif; ?>
        <?php if (!empty($products['slider'])): ?>
            <div class="products_slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($products['slider'] as $product):?>
                        <div class="products_item swiper-slide">
                            <?php if (!empty($product['slider_image'])): ?>
                                <div class="products_image">
                                    <img src="<?php echo $product['slider_image']?>" alt="">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product['slider_title'])): ?>
                                <div class="products_name"><?php echo $product['slider_title']?></div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="products_navigation">
                <div class="products_arrow products_arrow--left">
                    <svg width="24" height="24">
                        <use xlink:href="#slider_arrow--left"></use>
                    </svg>
                </div>
                <div class="products_arrow products_arrow--right">
                    <svg width="24" height="24">
                        <use xlink:href="#slider_arrow--right"></use>
                    </svg>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

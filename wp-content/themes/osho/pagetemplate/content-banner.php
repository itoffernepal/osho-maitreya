<div class="hero">
    <section class="hero-sec p-0">
        <div class="hero-banner">
            <div class="hero-slider">
                <!-- Banner Image -->
                <?php if (have_rows('banner_image')) : ?>
                <?php while (have_rows('banner_image')) : the_row();
                        $image1 = get_sub_field('image_1');
                        $image2 = get_sub_field('image_2');
                        $image3 = get_sub_field('image_3');
                    ?>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image1['url']); ?>" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image2['url']); ?>" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image3['url']); ?>" class="img-fluid">
                </div>
                <?php endwhile;
                endif; ?>
                <!-- Banner Image end -->
            </div>
            <!-- Banner Title , content , button -->
            <div class="hero-content text-black">
                <div class="container">
                    <div class="banner-content wow fadeInUp">
                        <h1><?php the_field('banner_title'); ?></h1>
                        <?php the_field('banner_content'); ?>
                        <?php $button = get_field('banner_button'); ?>
                        <?php if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                        ?>
                        <a href="<?php echo esc_url($button_url); ?>"
                            class="page-btn"><?php echo esc_html($button_title); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="scroll-btn text-center">
                        <a href="#" class="down-anchor"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
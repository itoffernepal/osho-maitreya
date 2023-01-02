<?php 
/*Template Name: Gallery page */
get_header('2');?>
<div class="page-banner" style="background: url(images/page-banner.png);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2>Gallery</h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="gallery">
    <div class="container">
        <section class="gallery-sec pt-0">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('gallery_title'); ?></h2>
                </div>
                <?php the_field('gallery_content'); ?>
            </div>
            <div class="row">
                <?php $gallery = array(
                    'post_type'         => 'galleries',
                    'posts_per_page'    => 3,
                    'orderby'           => 'date',
                    'order'             => 'DES',
                );
                $gallery_query = new WP_Query($gallery);
                if ($gallery_query->have_posts()) :
                    while ($gallery_query->have_posts()) : $gallery_query->the_post();
                ?>
                        <div class="col-lg-4">

                            <?php
                            $images = get_field('add_images');
                            if ($images) : ?>

                                <div class="gallery-card">
                                    <?php $gallery_rows = get_field('add_images'); ?>
                                    <span class="total-images"><?php echo $total_images = count($gallery_rows); ?> Photos</span>

                                    <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="image-preview" caption="caption">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                    </a>
                                    <?php foreach ($images as $image) : ?>
                                        <div class="more-images" style="display:none">
                                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="image-preview" caption="caption">

                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <div class="more-link mt-5 text-center">
                <?php $gallery_button   = get_field('gallery_button'); ?>
                <?php if ($gallery_button) :
                    $gallery_button_url     = $gallery_button['url'];
                    $gallery_button_title   = $gallery_button['title'];
                ?>
                    <a href="<?php echo esc_url($gallery_button_url); ?>" class="page-btn"><?php echo esc_html($gallery_button_title); ?></a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>


<?php get_footer();?>
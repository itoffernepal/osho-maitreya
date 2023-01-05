<?php
/*Template Name: Gallery page */
get_header('2'); ?>
<!-- Banner Section Start -->
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<!-- Banner Section End -->

<!-- Gallery Content Section -->
<div class="all-gallery">
    <div class="container">
        <section class="all-gallery-sec ">

            <!-- Gallery cpt -->
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
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- get template part of galleries  -->
                            <?php get_template_part('pagetemplate/content', 'gallery'); ?>
                            <!-- get template part of galleries end -->
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <!-- end -->
        </section>
    </div>
</div>
<!-- Gallery Content Section End -->
<?php get_footer(); ?>
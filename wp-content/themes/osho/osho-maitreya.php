<?php
/*Template Name: Osho Maitreya page */
get_header('2'); ?>
<!-- Banner Section start -->
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
<!-- Content Section Start -->
<div class="osho-maitreya ss-page">
    <div class="container">
        <section class="om-sec">
            <div class="section-intro text-start wow fadeIn">
                <div class="section-title">
                    <!-- title -->
                    <h2><?php the_field('title'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="om-text wow fadeIn">
                        <!-- content -->
                        <?php the_field('content'); ?>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="om-img wow fadeInUp">
                        <!-- image -->
                        <?php $image = get_field('image'); ?>
                        <?php if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_html($image['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="quote-part small-p wow fadeInUp">
                <div class="quotation">
                    <!-- quotation -->
                    <?php the_field('quote'); ?>
                </div>
            </div>
            <div class="estd-maitreya">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="estd-img wow fadeInUp">
                            <!-- image 2 -->
                            <?php $image2 = get_field('image_2'); ?>
                            <?php if (!empty($image2)) : ?>
                                <img src="<?php echo esc_url($image2['url']); ?>" class="img-fluid" alt="<?php echo esc_html($image2['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="estd-text wow fadeIn">
                            <!-- content 2 -->
                            <?php the_field('content_2'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Content Section End -->
<?php get_footer(); ?>
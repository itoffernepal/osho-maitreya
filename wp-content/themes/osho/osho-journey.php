<?php
/*Template Name: Osho Journey page */
get_header('2'); ?>
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
<div class="journey ss-page">
    <div class="container">
        <section class="journey-sec">
            <div class="section-intro text-startvwow fadeIn">
                <div class="section-title">
                    <h2><?php the_field('title'); ?></h2>
                </div>
            </div>
            <div class="journey-period">
            <div class="row mb-5 pb-5">
                <div class="col-lg-4">
                    <div class="estd-img wow fadeInUp">
                        <?php $image1 = get_field('image'); ?>
                        <?php if (!empty($image1)) : ?>
                            <img src="<?php echo esc_url($image1['url']); ?>" class="img-fluid" alt="<?php echo esc_html($image1['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="estd-text wow fadeIn">
                        <?php the_field('text_content'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="estd-text wow fadeIn">
                        <?php the_field('text_content_2'); ?>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="estd-img wow fadeInUp">
                        <?php $image2 = get_field('image_2'); ?>
                        <?php if (!empty($image2)) : ?>
                            <img src="<?php echo esc_url($image2['url']); ?>" class="img-fluid" alt="<?php echo esc_html($image2['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>
            <div class="quote-part small-p">
                <div class="quotation wow fadeInUp">
                    <?php the_field('quote'); ?>
                </div>
                <div class="more-link mt-5 text-center wow fadeInUp">
                    <?php $button = get_field('button'); ?>
                    <?php if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                    ?>
                        <a href="<?php echo esc_url($button_url); ?>" target="_blank" class="page-btn dark"><?php echo esc_html($button_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
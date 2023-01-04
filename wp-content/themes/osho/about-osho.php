<?php
/*Template Name: About osho page */
get_header('2'); ?>
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>">
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
<div class="abt-osho ss-page">
    <div class="container">
        <section class="ao-sec">
            <div class="section-intro text-start wow fadeIn">
                <div class="section-title">
                    <h2>
                        <?php the_field('title'); ?> </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="ao-text wow fadeIn">
                        <div class="text-center ao-highlight">
                            <p><?php the_field('highlighted_text'); ?></p>
                        </div>
                        <?php the_field('text_content'); ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ao-img wow fadeInUp">
                        <?php $about_img = get_field('about_image'); ?>
                        <?php if (!empty($about_img)) : ?>
                            <img src="<?php echo esc_url($about_img['url']); ?>" class="img-fluid" alt="<?php echo esc_html($about_img['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="quote-part small-p wow fadeInUp">
                <div class="quotation">
                    <?php the_field('quote'); ?>
                </div>
            </div>
            <div class="lg-image text-center wow fadeIn">
                <figure>
                    <?php $about_img2 = get_field('about_image_2'); ?>
                    <?php if (!empty($about_img2)) : ?>
                        <img src="<?php echo esc_url($about_img2['url']); ?>" class="img-fluid" alt="<?php echo esc_html($about_img2['alt']); ?>">
                    <?php endif; ?>
                </figure>
            </div>
            <?php the_field('text_content_2'); ?>
            <div class="quote-part small-p wow fadeIn">
                <div class="quotation">
                    <?php the_field('quote_2'); ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
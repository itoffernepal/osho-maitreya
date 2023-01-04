<?php
/*Template Name: Meditation page */
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
<div class="meditation ss-page">
    <div class="container">
        <section class="meditation-sec">
            <div class="section-intro text-start wow fadeIn">
                <div class="section-title">
                    <h2><?php the_field('title'); ?></h2>
                </div>
            </div>
            <div class="lg-image text-center wow fadeIn">
                <figure>
                    <?php $image = get_field('image'); ?>
                    <?php if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_html($image['alt']); ?>">
                    <?php endif; ?>
                </figure>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="om-text meditation-text text-center wow fadeIn">
                        <?php the_field('content'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
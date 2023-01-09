<?php
/*Template Name: All Events page */
get_header('2'); ?>
<!-- Banner Section Start -->
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('/') ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<!-- Banner Section End -->

<!-- Events Content Section Start -->
<?php $events = array(
                'post_type' => 'ourevent',
                'posts_per_page' => -1,
                'orderby' => 'meta_value',
                'meta_key' => 'event_end_date',
                'order' => 'DES',
                'meta_query' => array(
                    array(
                        'meta_key'  => 'event_end_date',
                        'value'     => date('ymd'),
                        'compare'   => '>=',
                        'type'      => 'DATE'
                    )
                )
            );
    $event_details = new WP_Query($events);
    if ($event_details->have_posts()):?>
<div class="all-events">
    <div class="container">
        <section class="all-events-sec">
            <div class="section-intro">
                <div class="section-title">
                    <!-- title -->
                    <h2><?php the_field('title'); ?></h2>
                </div>
                <!-- content -->
                <?php the_field('content'); ?>
            </div>
            <?php while ($event_details->have_posts()) : $event_details->the_post();
            ?>
                    <!-- Template Parts -->
                    <?php get_template_part('pagetemplate/content', 'event'); ?>
                    <!-- Template Parts end -->

                <?php endwhile; ?>
            <!-- Our Event Cpt End -->

            <!-- modalsection start -->
            <?php get_template_part('pagetemplate/content', 'modal'); ?>
            <!-- modalsection end -->
        </section>
    </div>
</div>
<?php
endif;
  wp_reset_postdata();
?>
<!-- Event Content Section End -->
<?php get_footer(); ?>
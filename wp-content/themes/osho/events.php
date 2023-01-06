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
            <!-- Our Event Cpt Start -->
            <?php $events = array(
                'post_type' => 'ourevent',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DES',
            );
            $event_query = new WP_Query($events);

            if ($event_query->have_posts()) :
                while ($event_query->have_posts()) : $event_query->the_post();
            ?>

                    <!-- Template Parts -->
                    <?php get_template_part('pagetemplate/content', 'event'); ?>
                    <!-- Template Parts end -->

                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- Our Event Cpt End of loop -->

            <!-- modalsection start -->
            <?php get_template_part('pagetemplate/content', 'modal'); ?>
            <!-- modalsection end -->
        </section>
    </div>
</div>
<!-- Event Content Section End -->
<?php get_footer(); ?>
<?php
/*Template Name: Audio page */
get_header('2'); ?>
<!-- Banner Section Start -->
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
<!-- Banner Section End -->

<!-- Content Section start -->
<!-- Albums CPt -->
<?php
// Set up the arguments for the custom query
$args = array(
    'post_type' => 'albums',
); ?>
<div class="audio-books bg-transparent">
    <div class="container">
        <section class="ab-sec">
            <div class="filter">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6">
                        <!-- Sorting Form-->
                        <div class="form-group">
                            <i class="fas fa-sliders-h"></i>
                            <select name="sortby" id="sort-select" onchange="fetchResults()">
                                <option value="created_at_desc">Sorted by latest</option>
                                <option value="created_at_asc">Sorted by oldest</option>
                                <option value="title">Sorted by (A-Z)</option>
                            </select>
                        </div>
                    </div>
                    <!-- Search form -->
                    <div class="col-md-6 col-sm-6">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <div class="ab-lists">

                    <div class="loader-animation"></div>
                <div class="row justify-content-center audiobook_content">
                    <?php

                    // Start the loop
                    $query = new WP_Query($args);
                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <!-- Album Template Part start -->
                        <?php get_template_part('pagetemplate/content', 'album'); ?>
                        <!-- Album Template Part End -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- End Loop -->
                </div>
            </div>

        </section>
    </div>
</div>
<!-- Content Section End -->
<?php get_footer(); ?>
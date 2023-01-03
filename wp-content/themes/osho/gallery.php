<?php 
/*Template Name: Gallery page */
get_header('2');?>
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2><?php the_title();?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('/') ;?>">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="all-gallery">
    <div class="container">
        <section class="all-gallery-sec ">
        <!-- Gallery Section -->
        <?php get_template_part('pagetemplate/content','gallery');?>
        <!-- end -->
           
        </section>
    </div>
</div>
<?php get_footer();?>
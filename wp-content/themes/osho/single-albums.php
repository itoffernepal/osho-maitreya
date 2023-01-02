<?php 
get_header('2');?>
<?php while(have_posts()) : the_post();?>
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                    <li><a href="#">Audio Books</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="playlist">
    <div class="container">
        <section class="playlist-sec">
        <?php the_content();?>
        </section>
    </div>
</div>

<?php endwhile; wp_reset_postdata();?>
<?php get_footer();?>
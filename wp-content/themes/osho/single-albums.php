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
                    <li><a href="<?php echo site_url('/audio');?>">Audio Books</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="playlist">
    <div class="container">
        <section class="playlist-sec">       

        <?php

// Get the related posts
$related_posts = get_field('album_playlist');
$i=1;
if ($related_posts) {
  
  foreach ($related_posts as $post) {
    if($i < 2){
    setup_postdata($post); 
    $related_id = get_the_ID(); // Get the ID of the related post
    $related_title = get_the_title(); // Get the title of the related post
    $shortcode = do_shortcode('[ai_playlist id="' . $related_id . '"]'); // Create the shortcode for the related post's ID
    echo '<h3>' . $related_title . '</h3>'; // Output the title of the related post
    echo $shortcode; // Output the shortcode
    $i++;
    }
  }
  wp_reset_postdata(); // Reset the post data
}

?>





        </section>
    </div>
</div>

<?php endwhile; wp_reset_postdata();?>
<?php get_footer();?>
<?php 
/*Template Name: Single-Audio-Books page */
get_header('2');?>
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
<div class="audio">
<div class="container">
    <section class="audio-sec">



<?php $playlist = array(
                    'post_type'     => 'playlists',
                    'posts_per_page'=> -1,
                    'orderby'       => 'date',
                    'order'         => 'DES',
                );
                $playlist_query = new WP_Query($playlist);
                if($playlist_query->have_posts()):
                    while($playlist_query->have_posts()) : $playlist_query->the_post();
                ?>
                
           
                <?php

// Start a loop to display all the songs
while ( have_rows('add_playlist') ) : the_row();

    // Get the MP3 file for the current song
    $mp3_file = get_sub_field('file');

    // Display the audio player for the song
    echo wp_audio_shortcode( array( 'src' => $mp3_file, 'title' =>'true') );

endwhile;

?>
                
                <?php endwhile;wp_reset_postdata();?>
                <?php endif;?>
                </section>
</div>
</div>
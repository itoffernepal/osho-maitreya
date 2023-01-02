<?php 
/*Template Name: Audio page */
get_header('2');?>
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
    echo wp_audio_shortcode( array( 'src' => $mp3_file ) );

endwhile;

?>
                        </div>
                    </a>
                </div>
                
                <?php endwhile;wp_reset_postdata();?>
                <?php endif;?>
<?php get_footer();?>
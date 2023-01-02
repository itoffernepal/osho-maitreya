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

// Check if the repeater field has rows of data
if( have_rows('add_playlist') ):

 	// Loop through the rows of data
    while ( have_rows('add_playlist') ) : the_row(); ?>

        <?php // Display the MP3 file ?>
       <?php $mp3_file = get_sub_field('audio');
        echo '<audio src="' . $mp3_file['url'] . '" controls></audio>'; ?>

       <?php  // Display the title ?>
       <?php  $title = get_sub_field('title');
        echo '<h3>' . $title . '</h3>';?>

        <?php // Display the image ?>
       <?php $image = get_sub_field('cover_photo'); ?>
       
        <?php if(!empty($image)): ?>
            
        <img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']);?>"><br><br>
        <?php endif; ?>

     <?php endwhile; ?>

<?php else : ?>

    // No rows found

<?php endif;

?>



                        </div>
                    </a>
                </div>
                
                <?php endwhile;wp_reset_postdata();?>
                <?php endif;?>
<?php get_footer();?>
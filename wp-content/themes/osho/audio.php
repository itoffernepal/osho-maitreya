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
                
           
                            <?php if(have_rows('add_playlist')):
                                while(have_rows('add_playlist')) : the_row();?>
                               
                            
                            <?php the_sub_field('title');?>

                            <?php
$file = get_sub_field('audio');
if( $file ): ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a><br>
<?php endif; ?>
                           
                            
                            <?php endwhile;endif;?>
                        </div>
                    </a>
                </div>
                
                <?php endwhile;wp_reset_postdata();?>
                <?php endif;?>
<?php get_footer();?>
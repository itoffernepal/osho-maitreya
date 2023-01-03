<?php
/**
 * Search result page.
 */

get_header('2');
global $wp_query;

//echo '<pre/>';
//print_r($wp_query);
//wp_die();
?>
	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="container">
				<header class="mb-5">
					<h1 class="page-title"> <?php echo $wp_query->found_posts; ?>
						<?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
					</h1>
				</header>

				<?php if ( have_posts() ) { ?>

					<div>

						<?php while ( have_posts() ) {
							the_post(); ?>
							<div class="column">
                <div class="slide-item ab-card">
                    <a href="<?php the_permalink();?>">
                        <div class="ab-img">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid">
                        </div>
                        <div class="ab-brief">
                            <ul class="meta-tag">
                                <li><?php echo get_the_date('F')?> <?php echo get_the_date('d');?>
                                    <?php echo get_the_date('Y');?></li>
                            </ul>
                            <h2><?php the_title();?></h2>
                            <!-- <span class="total-chapter">1 Chapters</span>  -->
                            <?php

                            $playlists = get_field('album_playlist', $post->ID);
                            $total_tracks = 0; 
                            if (isset($playlists) && !empty($playlists)) {
                            
                            for ($i = 0; $i < count($playlists); $i++) {
                                $tracks = get_post_meta($playlists[$i], '_audioigniter_tracks', true);

                                
                                if (isset($tracks) && !empty($tracks)) {
                                $total_tracks += count($tracks); 
                                }
                            }
                            }
                            echo '<span class="total-chapter">' . $total_tracks . ' Chapters</span>';

                            ?>
                        </div>
                    </a>
                </div>
                </div>

						<?php } ?>

					</div>

					

				<?php } else {
					get_search_form();
				}?>

			</div>
		</main>
	</div>
<?php get_footer(); ?>
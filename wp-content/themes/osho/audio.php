<?php 
/*Template Name: Audio page */
get_header('2');?>
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
<div class="audio-books bg-transparent">
    <div class="container">
        <section class="ab-sec">
            <div class="filter">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="form-group">
                    <i class="fas fa-sliders-h"></i>
                        <select>
                            <option>Sorted by latest</option>
                            <option>Sorted by oldest</option>
                            <option>Sorted by (A-Z)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group text-end">
                    <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
            </div>
            </div>
            <div class="ab-lists">
                <div class="row justify-content-center">
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
                            <?php $counter = 1;?>
                            <?php if(have_rows('add_playlist')):
                                while(have_rows('add_playlist')) : the_row();?>
                            <?php if($counter == 1); ?>
                            <span class="total-chapter"><?php echo count( get_field('add_playlist') );?> Chapters</span>
                            <?php break;?>

                            <?php endwhile;endif;?>
                        </div>
                    </a>
                </div>
                </div>
               

                <?php endwhile;wp_reset_postdata();?>
                <?php endif;?>
                </div>
            </div>
            <div class="text-center more-link">
                <?php $audio_button = get_field('audiobook_button'); ?>
                <?php if ($audio_button) :
                    $audio_button_url = $audio_button['url'];
                    $audio_button_title = $audio_button['title'];
                ?>
                <a href="<?php echo esc_url($audio_button_url); ?>" class="page-btn dark mt-5">
                    <?php echo esc_html($audio_button_title); ?>
                </a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<div class="container">



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

</div>

<?php get_footer();?>
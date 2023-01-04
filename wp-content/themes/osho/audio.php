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
<?php
// Set up the arguments for the custom query
$args = array(
  'post_type' => 'albums',
); ?>

<?php if ( isset( $_GET['sortby'] ) ) { ?>

    <?php   switch ( $_GET['sortby'] ) {
    case 'title':
      $args['orderby'] = 'title';
      $args['order'] = 'DESC';
      break;
    case 'date':
      $args['orderby'] = 'date';
      $args['order'] = 'DESC';
      break;
    case 'author':
      $args['orderby'] = 'author';
      $args['order'] = 'ASC';
      break;
  } ?>
  <?php } ?>
<div class="audio-books bg-transparent">
    <div class="container">
        <section class="ab-sec">
            <div class="filter">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                    <i class="fas fa-sliders-h"></i>
                    <select id="sort-select">
                            <option>Sorted by latest</option>
                            <option>Sorted by oldest</option>
                            <option>Sorted by (A-Z)</option>
                        </select>
                    </div> -->
                    <form method="get" action="">
                    <div class="form-group">
                    <i class="fas fa-sliders-h"></i>
                        <select name="sortby" id="sort-select">
                        <option value="title">Sorted by latest</option>
                        <option value="date">Sorted by oldest</option>
                        <option value="author">Sorted by (A-Z)</option>
                        </select>
                        <input type="submit" class="search-btn" value="Go">
                    </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- <div class="form-group text-end">
                    <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div> -->
                    <?php get_search_form();?>
                </div>
            </div>
            </div>
            <div class="ab-lists">
                <div class="row justify-content-center">
                <?php

// Start the loop
while ( $query->have_posts() ) : $query->the_post();
?>
                <div class="column">
                <div class="slide-item ab-card wow fadeInUp">
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
                            <?php $playlists = get_field('album_playlist',$post->ID);?>
                            <?php if(isset($playlists) && !empty($playlists)):?>
                                <?php $tracks = get_post_meta($playlists[0],'_audioigniter_tracks',true);?>
                                <?php  if(isset($tracks) &&  !empty($tracks)):?>
                                    <?php //$unserliazedTracks = unserialize($tracks);?>
                                    <span class="total-chapter"><?php echo count($tracks);?> Chapters</span>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </a>
                </div>
                </div>
                <?php endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata();?>
                </div>
            </div>
            
        </section>
    </div>
</div>

<?php get_footer();?>
<div class="column">
    <div class="slide-item ab-card wow fadeInUp">
        <a href="<?php the_permalink(); ?>">
            <div class="ab-img">
            <?php 
        $thumbnail_url = get_the_post_thumbnail_url();
        if ( empty( $thumbnail_url ) ) {
        $thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';
        }
    ?>
    <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="img-fluid">
            </div>
            <div class="ab-brief">
                <ul class="meta-tag">
                    <li><?php echo get_the_date('F') ?> <?php echo get_the_date('d'); ?>
                        <?php echo get_the_date('Y'); ?></li>
                </ul>
                <h2><?php the_title(); ?></h2>
                <!-- <span class="total-chapter">1 Chapters</span>  -->
                <?php $playlists = get_field('album_playlist', $post->ID); ?>
                <?php if (isset($playlists) && !empty($playlists)) : ?>
                    <?php $tracks = get_post_meta($playlists[0], '_audioigniter_tracks', true); ?>
                    <?php if (isset($tracks) &&  !empty($tracks)) : ?>
                        <?php //$unserliazedTracks = unserialize($tracks);
                        ?>
                        <span class="total-chapter"><?php echo count($tracks); ?> Chapters</span>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </a>
    </div>
</div>
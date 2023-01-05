<?php get_header(); ?>
<!-- Banner Section start -->
<div class="hero">
    <section class="hero-sec p-0">
        <div class="hero-banner">
            <div class="hero-slider">
                <!-- Banner Image -->
                <?php if (have_rows('banner_image')) : ?>
                <?php while (have_rows('banner_image')) : the_row();
                        $image1 = get_sub_field('image_1');
                        $image2 = get_sub_field('image_2');
                        $image3 = get_sub_field('image_3');
                    ?>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image1['url']); ?>" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image2['url']); ?>" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image3['url']); ?>" class="img-fluid">
                </div>
                <?php endwhile;
                endif; ?>
                <!-- Banner Image end -->
            </div>
            <!-- Banner Title , content , button -->
            <div class="hero-content text-black">
                <div class="container">
                    <div class="banner-content wow fadeInUp">
                        <h1><?php the_field('banner_title'); ?></h1>
                        <?php the_field('banner_content'); ?>
                        <?php $button = get_field('banner_button'); ?>
                        <?php if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                        ?>
                        <a href="<?php echo esc_url($button_url); ?>"
                            class="page-btn"><?php echo esc_html($button_title); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="scroll-btn text-center">
                        <a href="#" class="down-anchor"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- Banner section end -->

<!-- Latest Audiobook section start -->
<div class="audio-books">
    <div class="container">
        <section class="ab-sec">
            <div class="section-intro wow fadeIn">
                <div class="section-title">
                    <!-- Latest audiobook title -->
                    <h2><?php the_field('audiobook_title'); ?></h2>
                </div>
                <!-- latest audiobook content -->
                <p><?php the_field('audiobook_content'); ?></p>
            </div>
            <div class="ab-slider wow fadeIn">
                <?php $albums = array(
                    'post_type'     => 'albums',
                    'posts_per_page' => -1,
                    'orderby'       => 'date',
                    'order'         => 'DES',
                );
                $album_query = new WP_Query($albums);
                if ($album_query->have_posts()) :
                    while ($album_query->have_posts()) : $album_query->the_post();
                        global $post;
                ?>

                <div class="slide-item ab-card">
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
                            <!-- number of chapter in album code start -->
                            <?php $playlists = get_field('album_playlist', $post->ID); ?>
                            <?php if (isset($playlists) && !empty($playlists)) : ?>
                            <?php $tracks = get_post_meta($playlists[0], '_audioigniter_tracks', true); ?>
                            <?php if (isset($tracks) &&  !empty($tracks)) : ?>
                            <?php //$unserliazedTracks = unserialize($tracks);
                                            ?>
                            <span class="total-chapter"><?php echo count($tracks); ?> Chapters</span>
                            <?php endif; ?>
                            <?php endif; ?>
                            <!-- number of chapter in album code end -->
                        </div>
                    </a>
                </div>
                <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
                <!-- album cpt end -->
            </div>
            <div class="text-center more-link wow fadeInUp">
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
            <!-- end -->
        </section>
    </div>
    <div class="line-img wow fadeInLeft" data-wow-delay="0.5s">
        <?php $bg_image = get_field('audiobook_bg_image'); ?>
        <?php if (!empty($bg_image)) : ?>
        <img src="<?php echo esc_url($bg_image['url']); ?>" alt="<?php echo esc_html($bg_image['alt']); ?>">
        <?php endif; ?>
    </div>
    <!-- end -->
</div>
<!-- Latest Audiobook section end -->


<!-- About osho section -->
<div class="about position-relative">
    <div class="about-img">
        <div class="row">
            <div class="offset-lg-7 col-lg-5">
                <div class="abt-video position-relative h-100 wow zoomIn">
                    <?php $about_osho_image = get_field('about_osho_image'); ?>
                    <?php if (!empty($about_osho_image)) : ?>
                    <img src="<?php echo esc_url($about_osho_image['url']); ?>" class="img-fluid"
                        alt="<?php echo esc_html($about_osho_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="about-sec text-center">
            <div class="row">
                <div class="col-lg-7 wow fadeInUp">
                    <div class="section-intro mb-0">
                        <div class="section-title">
                            <h2><?php the_field('about_osho_title'); ?></h2>
                        </div>
                        <p><?php the_field('about_osho_subtitle'); ?></p>
                    </div>
                    <p><?php the_field('about_osho_content'); ?>
                    </p>
                    <div class="text-center more-link">
                        <?php $about_osho_button = get_field('about_osho_button'); ?>
                        <?php if ($about_osho_button) :
                            $about_osho_button_url = $about_osho_button['url'];
                            $about_osho_button_title = $about_osho_button['title'];
                        ?>
                        <a href="<?php echo esc_url($about_osho_button_url); ?>"
                            class="page-btn mt-5"><?php echo esc_html($about_osho_button_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- About osho section end -->

<!-- About Osho Maitreya section start -->
<div class="osho-maitrey position-relative">
    <div class="container">
        <section class="om-sec">
            <div class="section-intro wow fadeIn">
                <div class="section-title">
                    <h2><?php the_field('about_osho_maitreya_title'); ?></h2>
                </div>
                <p><?php the_field('about_osho_maitreya_content'); ?></p>
            </div>
            <div class="om-slider wow fadeInUp">
                <?php if (have_rows('about_osho_maitreya_slider')) : ?>
                <?php while (have_rows('about_osho_maitreya_slider')) : the_row(); ?>
                <div class="slide-item">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider-img">
                                <?php $slider = get_sub_field('image'); ?>
                                <?php if (!empty($slider)) : ?>
                                <img src="<?php echo esc_url($slider['url']); ?>" class="slide-img"
                                    alt="<?php echo esc_html($slider['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="slider-text">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                endif; ?>
            </div>
        </section>
    </div>
    <div class="line-img wow fadeInLeft" data-wow-delay="0.5s">
        <?php $maitreya_bg_image = get_field('about_osho_maitreya_bg_image'); ?>
        <?php if (!empty($maitreya_bg_image)) : ?>
        <img src="<?php echo esc_url($maitreya_bg_image['url']); ?>"
            alt="<?php echo esc_html($maitreya_bg_image['alt']); ?>">
        <?php endif; ?>
    </div>
</div>
<!-- About Osho Maitreya section end -->


<!-- Quote Section Start -->
<div class="bg-attachment position-relative" style="background:url(<?php $background_image = get_field('quote_section_bg_image');
                                                                    echo $background_image['url']; ?>)">
    <div class="container">
        <section class="bga-sec text-center large-p wow fadeIn">
            <figure>
                <?php $quote_logo = get_field('quote_section_logo'); ?>
                <?php if (!empty($quote_logo)) : ?>
                <img src="<?php echo esc_url($quote_logo['url']); ?>" alt="<?php echo esc_html($quote_logo['alt']); ?>"
                    class="img-fluid">
                <?php endif; ?>
            </figure>
            <div class="bga-text">
                <?php the_field('quote_section_content'); ?>
            </div>
            <div class="more-link">
                <?php $quote_button = get_field('quote_section_button'); ?>
                <?php if ($quote_button) :
                    $quote_button_url = $quote_button['url'];
                    $quote_button_title = $quote_button['title'];
                ?>
                <a href="<?php echo esc_url($quote_button_url); ?>"
                    class="page-btn"><?php echo esc_html($quote_button_title); ?></a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<!-- Quote Section End -->

<!-- Event Section Start -->
<div class="events">
    <div class="container">
        <section class="events-sec">
            <div class="section-intro wow fadeIn">
                <div class="section-title">
                    <h2><?php the_field('upcoming_title'); ?></h2>
                </div>
                <?php the_field('upcoming_content'); ?>
            </div>

            <!-- Our event cpt start -->
            <?php $events = array(
                'post_type' => 'ourevent',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DES',
            );
            $event_query = new WP_Query($events);

            if ($event_query->have_posts()) :
                while ($event_query->have_posts()) : $event_query->the_post();
            ?>
            <!-- Template Parts -->
                    <?php get_template_part('pagetemplate/content', 'event'); ?>
                    <!-- Template Parts end -->
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
            <!-- Our Event Cpt End -->

            <!-- modalsection start -->
            <?php get_template_part('pagetemplate/content', 'modal'); ?>
            <!-- modalsection end -->


            <div class="more-link mt-5 text-center wow fadeInUp">
                <?php $upcoming_button = get_field('upcoming_event_button'); ?>
                <?php if ($upcoming_button) :
                    $upcoming_button_url    = $upcoming_button['url'];
                    $upcoming_button_title  = $upcoming_button['title'];
                ?>
                <a href="<?php echo esc_url($upcoming_button_url); ?>"
                    class="page-btn dark"><?php echo esc_html($upcoming_button_title); ?></a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<!-- Event Section End -->

<!-- Gallery Section Start -->
<div class="gallery">
    <div class="container">
        <section class="home-gallery-sec pt-0">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('gallery_title'); ?></h2>
                </div>
                <?php the_field('gallery_content'); ?>
            </div>
            <!-- Gallery Section -->
            <?php get_template_part('pagetemplate/content', 'gallery'); ?>
            <!-- end -->

            <!-- gallery section slider for mobile -->

            <div class="gallery-slider">
                <?php $gallery = array(
                    'post_type'         => 'galleries',
                    'posts_per_page'    => 3,
                    'orderby'           => 'date',
                    'order'             => 'DES',
                );
                $gallery_query = new WP_Query($gallery);
                if ($gallery_query->have_posts()) :
                    while ($gallery_query->have_posts()) : $gallery_query->the_post();
                ?>
                        <div class="slide-item">

                            <?php
                            $images = get_field('add_images');
                            if ($images) : ?>

                                <div class="gallery-card wow fadeIn">
                                    <?php $gallery_rows = get_field('add_images'); ?>
                                    <span class="total-images"><?php echo $total_images = count($gallery_rows); ?> Photos</span>

                                    <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="image-preview" caption="caption">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                    </a>
                                    <?php foreach ($images as $image) : ?>
                                        <div class="more-images" style="display:none">
                                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="image-preview" caption="caption">

                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

            <!-- gallery slider end -->

            <div class="more-link mt-5 text-center wow fadeInUp">
                <?php $gallery_button   = get_field('gallery_button'); ?>
                <?php if ($gallery_button) :
                    $gallery_button_url     = $gallery_button['url'];
                    $gallery_button_title   = $gallery_button['title'];
                ?>
                <a href="<?php echo esc_url($gallery_button_url); ?>"
                    class="page-btn"><?php echo esc_html($gallery_button_title); ?></a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Contact Section Start -->
<div class="cta">
    <div class="container">
        <section class="cta-sec text-center wow fadeInUp">
            <h3><?php the_field('contact_title'); ?></h3>
            <?php the_field('contact_content'); ?>
            <div class="more-link mt-5 text-center">
                <?php $contact_button = get_field('contact_button'); ?>
                <?php if ($contact_button) :
                    $contact_button_url = $contact_button['url'];
                    $contact_button_title = $contact_button['title'];
                ?>
                <a href="<?php echo esc_url($contact_button_url); ?>"
                    class="page-btn dark"><?php echo  esc_html($contact_button_title); ?></a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<!-- Contact Section End -->
<?php get_footer(); ?>
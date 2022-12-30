<?php get_header();?>
<!-- Banner Section start -->
<h1>this is test</h1>
<div class="hero">
    <section class="hero-sec p-0">
        <div class="hero-banner">
            <div class="hero-slider">
                <!-- Banner Image -->
                <?php if(have_rows('banner_image')):?>
                    <?php while(have_rows('banner_image')) : the_row();
                    $image1 = get_sub_field('image_1');
                    $image2 = get_sub_field('image_2');
                    $image3 = get_sub_field('image_3');
                    ?>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image1['url']);?>" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image2['url']);?>" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo esc_url($image3['url']);?>" class="img-fluid">
                </div>
                <?php endwhile;endif;?>
                <!-- Banner Image end -->
            </div>
            <!-- Banner Title , content , button -->
            <div class="hero-content text-black">
                <div class="container">
                    <div class="banner-content">
                        <h1><?php the_field('banner_title');?></h1>
                        <?php the_field('banner_content');?>
                        <?php $button = get_field('banner_button');?>
                        <?php if($button):
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            ?>
                        <a href="<?php echo esc_url($button_url);?>" class="page-btn"><?php echo esc_html($button_title);?></a>
                        <?php endif;?>
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
<div class="audio-books">
    <div class="container">
        <section class="ab-sec">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('audiobook_title');?></h2>
                </div>
                <p><?php the_field('audiobook_content');?></p>
            </div>
            <div class="ab-slider">
                <div class="slide-item ab-card">
                    <a href="#">
                        <div class="ab-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/ab.png" class="img-fluid">
                        </div>
                        <div class="ab-brief">
                            <ul class="meta-tag">
                                <li>November 28, 2022</li>
                            </ul>
                            <h2>Communism: The Pinnacle of Capitalism</h2>
                            <span class="total-chapter">17 Chapters</span>
                        </div>
                    </a>
                </div>
                <div class="slide-item ab-card">
                    <a href="#">
                        <div class="ab-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/ab1.png" class="img-fluid">
                        </div>
                        <div class="ab-brief">
                            <ul class="meta-tag">
                                <li>November 28, 2022</li>
                            </ul>
                            <h2>God: The Centre of Life </h2>
                            <span class="total-chapter">17 Chapters</span>
                        </div>
                    </a>
                </div>
                <div class="slide-item ab-card">
                    <a href="#">
                        <div class="ab-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/ab2.png" class="img-fluid">
                        </div>
                        <div class="ab-brief">
                            <ul class="meta-tag">
                                <li>November 28, 2022</li>
                            </ul>
                            <h2>The Dance of the Divine </h2>
                            <span class="total-chapter">17 Chapters</span>
                        </div>
                    </a>
                </div>
                <div class="slide-item ab-card">
                    <a href="#">
                        <div class="ab-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/ab3.png" class="img-fluid">
                        </div>
                        <div class="ab-brief">
                            <ul class="meta-tag">
                                <li>November 28, 2022</li>
                            </ul>
                            <h2>Just Mindfulness </h2>
                            <span class="total-chapter">17 Chapters</span>
                        </div>
                    </a>
                </div>
                <div class="slide-item ab-card">
                    <a href="#">
                        <div class="ab-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/ab4.png" class="img-fluid">
                        </div>
                        <div class="ab-brief">
                            <ul class="meta-tag">
                                <li>November 28, 2022</li>
                            </ul>
                            <h2>A Moment of Eternal Silence</h2>
                            <span class="total-chapter">17 Chapters</span>
                        </div>
                    </a>
                </div>

            </div>
            <div class="text-center more-link">
                <?php $audio_button = get_field('audiobook_button');?>
                <?php if($audio_button):
                    $audio_button_url = $audio_button['url'];
                    $audio_button_title = $audio_button['title'];
                    ?>
                <a href="<?php echo esc_url($audio_button_url);?>" class="page-btn dark mt-5">
                <?php echo esc_html($audio_button_title);?>
            </a>
                <?php endif;?>
            </div>
        </section>
    </div>
    <div class="line-img">
        <?php $bg_image= get_field('audiobook_bg_image');?>
        <?php if(!empty($bg_image)):?>
        <img src="<?php echo esc_url($bg_image['url']);?>" alt="<?php echo esc_html($bg_image['alt']);?>">
        <?php endif;?>
    </div>
</div>
<div class="about position-relative">

    <div class="about-img">
        <div class="row">
            <div class="offset-lg-7 col-lg-5">
                <div class="abt-video position-relative h-100">
                    <?php $about_osho_image = get_field('about_osho_image');?>
                    <?php if(!empty($about_osho_image)):?>
                    <img src="<?php echo esc_url($about_osho_image['url']);?>" class="img-fluid" alt="<?php echo esc_html($about_osho_image['alt']);?>">
                        <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="about-sec text-center">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-intro mb-0">
                        <div class="section-title">
                            <h2><?php the_field('about_osho_title');?></h2>
                        </div>
                        <p><?php the_field('about_osho_subtitle');?></p>
                    </div>
                    <p><?php the_field('about_osho_content');?>
                    </p>
                    <div class="text-center more-link">
                        <?php $about_osho_button = get_field('about_osho_button');?>
                        <?php if($about_osho_button):
                            $about_osho_button_url = $about_osho_button['url'];
                            $about_osho_button_title = $about_osho_button['title'];
                            ?>
                        <a href="<?php echo esc_url($about_osho_button_url);?>" class="page-btn mt-5"><?php echo esc_html($about_osho_button_title);?></a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="osho-maitrey position-relative">
    <div class="container">
        <section class="om-sec">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('about_osho_maitreya_title');?></h2>
                </div>
                <p><?php the_field('about_osho_maitreya_content');?></p>
            </div>
            <div class="om-slider">
                <?php if(have_rows('about_osho_maitreya_slider')):?>
                    <?php while(have_rows('about_osho_maitreya_slider')) : the_row();?>
                <div class="slide-item">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider-img">
                                <?php $slider = get_sub_field('image');?>
                                <?php if(!empty($slider)):?>
                                <img src="<?php echo esc_url($slider['url']);?>" class="slide-img" alt="<?php echo esc_html($slider['alt']);?>">
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="slider-text">
                                <h2><?php the_sub_field('title');?></h2>
                                <?php the_sub_field('content');?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;endif;?>
                <!-- <div class="slide-item">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider-img">
                                <img src="<?php echo get_template_directory_uri();?>/images/slider-img.png" class="slide-img" alt="">
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="slider-text">
                                <h2>Osho Maitreya for Meditation 2</h2>
                                <p>Osho Maitreya is a pristine and peaceful space for the spiritually inclined. Seekers
                                    from world-over, converge here to participate in Meditation retreats and benefit
                                    from the pulsating energy-field that has built up with the continued practice of
                                    Meditation.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
    </div>
    <div class="line-img">
        <img src="<?php echo get_template_directory_uri();?>/images/line.png" alt="">
    </div>
</div>
<div class="bg-attachment position-relative" style="background:url(<?php echo get_template_directory_uri();?>/images/bga.jpg)">
    <div class="container">
        <section class="bga-sec text-center large-p">
            <figure>
                <img src="<?php echo get_template_directory_uri();?>/images/osho-white.png" class="img-fluid">
            </figure>
            <div class="bga-text">
                Osho Maitreya is a pristine and peaceful space for the spiritually inclined. Seekers from world-over,
                converge here to participate in Meditation retreats and benefit from the pulsating energy-field that has
                built up with the continued practice of Meditation. Osho is a contemporary enlightened mystic, visionary
                and a rebel. He designed over six hundred techniques of meditation. These scientifically designed
                techniques unleash a powerful and joyous dynamism between body-mind, creating an effortless and
                spontaneous backdrop for meditation.
            </div>
            <div class="more-link">
                <a href="#" class="page-btn">Explore more</a>
            </div>
        </section>
    </div>
</div>
<div class="events">
    <div class="container">
        <section class="events-sec">
            <div class="section-intro">
                <div class="section-title">
                    <h2>Upcoming Events</h2>
                </div>
                <p>Osho has given thousands of discourses on all the well-known and not so known mystics of the world,
                    adopt osho, visiting our events.</p>
            </div>
            <div class="event-brief">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">
                        <div class="eb-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/osho.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="eb-time">
                            <ul>
                                <li>
                                    <h2>Osho Meditative Therapy</h2>
                                </li>
                                <li>11 December on the occasion of Osho’s Birthday</li>
                                <li>7 – 11 December, 2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eb-text">
                            <p> A very powerful & most fundamental meditative therapy designed by Osho for every
                                meditator whether beginner or seasoned. There are 3 steps to dive deeper & allowing
                                meditation to happen.</p>
                            <ul>
                                <li>Laughing-Tears-Silence.</li>
                                <li>Facilitated by: Osho Maitreya Japan</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="line-img">
                    <img src="<?php echo get_template_directory_uri();?>/images/line2.png" alt="">
                </div>
            </div>
            <div class="more-link mt-5 text-center">
                <a href="#" class="page-btn dark">View all events</a>
            </div>
        </section>
    </div>
</div>
<div class="gallery">
    <div class="container">
        <section class="gallery-sec pt-0">
            <div class="section-intro">
                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
                <p>Some glimpse of what we do hereand Events organized by Osho Maitreya.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="more-link mt-5 text-center">
                <a href="#" class="page-btn">View our gallery</a>
            </div>
        </section>
    </div>
</div>
<div class="cta">
    <div class="container">
        <section class="cta-sec text-center">
            <h3>Anything you want to know about Osho Meditation and Events?</h3>
            <p>If you have any queries regarding the Osho meditation, Osho Maitreya, And Events to be held here in Osho Maitreya, then you can contact us for more information. </p>
            <div class="more-link mt-5 text-center">
                <a href="#" class="page-btn dark">Contact us</a>
            </div>
        </section>
    </div>
</div>

<?php get_footer();?>



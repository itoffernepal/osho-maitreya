<?php get_header();?>
<!-- Banner Section start -->
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
                        <a href="<?php echo esc_url($button_url);?>"
                            class="page-btn"><?php echo esc_html($button_title);?></a>
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
                    <img src="<?php echo esc_url($about_osho_image['url']);?>" class="img-fluid"
                        alt="<?php echo esc_html($about_osho_image['alt']);?>">
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
                        <a href="<?php echo esc_url($about_osho_button_url);?>"
                            class="page-btn mt-5"><?php echo esc_html($about_osho_button_title);?></a>
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
                                <img src="<?php echo esc_url($slider['url']);?>" class="slide-img"
                                    alt="<?php echo esc_html($slider['alt']);?>">
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
            </div>
        </section>
    </div>
    <div class="line-img">
        <?php $maitreya_bg_image = get_field('about_osho_maitreya_bg_image');?>
        <?php if(!empty($maitreya_bg_image)):?>
        <img src="<?php echo esc_url($maitreya_bg_image['url']);?>" alt="<?php echo esc_html($maitreya_bg_image['alt']);?>">
        <?php endif;?>
    </div>
</div>

<div class="bg-attachment position-relative" style="background:url(<?php $background_image = get_field('quote_section_bg_image');
                                            echo $background_image['url']; ?>)">
    <div class="container">
        <section class="bga-sec text-center large-p">
            <figure>
                <?php $quote_logo = get_field('quote_section_logo');?>
                <?php if(!empty($quote_logo)):?>
                <img src="<?php echo esc_url($quote_logo['url']);?>" alt="<?php echo esc_html($quote_logo['alt']); ?>" class="img-fluid">
                <?php endif;?>
            </figure>
            <div class="bga-text">
                <?php the_field('quote_section_content');?>
            </div>
            <div class="more-link">
                <?php $quote_button = get_field('quote_section_button');?>
                <?php if($quote_button):
                    $quote_button_url = $quote_button['url'];
                    $quote_button_title = $quote_button['title'];
                    ?>
                <a href="<?php echo esc_url($quote_button_url);?>" class="page-btn"><?php echo esc_html($quote_button_title);?></a>
            <?php endif;?>
            </div>
        </section>
    </div>
</div>
<div class="events">
    <div class="container">
        <section class="events-sec">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('upcoming_title');?></h2>
                </div>
                <?php the_field('upcoming_content');?>
            </div>
            <div class="event-brief">
                <div class="row g-0 ">
                    <div class="col-lg-3">
                        <div class="eb-img">
                            <img src="<?php echo get_template_directory_uri();?>/images/osho.png" class="img-fluid"
                                alt="">
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
                            <a href="#event-form" class="page-btn dark" data-bs-toggle="modal">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="line-img">
                    <img src="<?php echo get_template_directory_uri();?>/images/line2.png" alt="">
                </div>


                
<!-- event modal -->



<!-- Modal -->
<div class="modal fade form-popup" id="event-form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body form-content p-4">
                <div class="section-intro text-start mb-4">
                    <h2>Register for Event: Osho Meditative Therapy</h2>
                    <p>Please enter information to submit your query for event<br>Osho Meditative Therapy(2023).</p>
                </div>

                <form autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>First Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>Last Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>Sannyas Name (If you Have)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="email" placeholder=" ">
                                <label>Your Email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="number" placeholder=" ">
                                <label>Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <select class="floating-select" onclick="this.setAttribute('value', this.value);"
                                    value="">
                                    <option value=""></option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Third Gender</option>
                                </select>
                                <label>Select Gender</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="floating-label form-group">
                                <textarea class="floating-input floating-textarea" placeholder=" "></textarea>

                                <label>Experience with osho</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>Address Line 1</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>Address Line 2</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>City</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="text" placeholder=" ">
                                <label>State</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="number" placeholder=" ">
                                <label>ZIP</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <select class="floating-select" onclick="this.setAttribute('value', this.value);"
                                    value="">
                                    <option value=""></option>
                                    <option value="1">Country 1</option>
                                    <option value="2">Country 2</option>
                                    <option value="3">Country 3</option>
                                </select>
                                <label>Country</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="floating-label form-group">
                                <textarea class="floating-input floating-textarea" placeholder=" "></textarea>

                                <label>Message</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="page-btn dark w-auto"> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- event modal close -->



            </div>
            <div class="more-link mt-5 text-center">
                <?php $upcoming_button = get_field('upcoming_event_button');?>
                <?php if($upcoming_button):
                    $upcoming_button_url    = $upcoming_button['url'];
                    $upcoming_button_title  = $upcoming_button['title'];
                    ?>
                <a href="<?php echo esc_url($upcoming_button_url);?>" class="page-btn dark"><?php echo esc_html($upcoming_button_title);?></a>
                <?php endif;?>
            </div>
        </section>
    </div>
</div>


<div class="gallery">
    <div class="container">
        <section class="gallery-sec pt-0">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('gallery_title');?></h2>
                </div>
                <?php the_field('gallery_content');?>
            </div>
            <div class="row">
                <?php $gallery = array(
                    'post_type'         => 'galleries',
                    'posts_per_page'    => 3,
                    'orderby'           => 'date',
                    'order'             => 'DES',
                );
                $gallery_query = new WP_Query($gallery);
                if($gallery_query->have_posts()):
                    while($gallery_query->have_posts()) : $gallery_query->the_post();
                 ?>
                <div class="col-lg-4">

<<<<<<< HEAD
                <?php 
                $images = get_field('add_images');
                if( $images ): ?>
                
                    <div class="gallery-card">
                    <?php $gallery_rows= get_field('add_images'); ?>
                        <span class="total-images"><?php echo $total_images = count($gallery_rows); ?> Photos</span>
                        
                        <a href="<?php the_post_thumbnail_url();?>" data-fancybox="image-preview" caption="caption">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="">
=======
                            <img src="<?php echo get_template_directory_uri();?>/images/gallery1.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery2.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery3.png" class="img-fluid"
                                alt="">
>>>>>>> 5c25aa283e629d17ff4d5c0c78b9bbb6a8baeba9
                        </a>
                        <?php foreach( $images as $image ): ?>
                        <div class="more-images"  style="display:none">
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="image-preview" caption="caption">
                            
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <?php endif;?>
                </div>
                <?php endwhile; wp_reset_postdata();?>
                <?php endif;?>
               
            </div>
            <div class="more-link mt-5 text-center">
                <?php $gallery_button   = get_field('gallery_button');?>
                <?php if($gallery_button):
                    $gallery_button_url     = $gallery_button['url'];
                    $gallery_button_title   = $gallery_button['title'];
                    ?>
                <a href="<?php echo esc_url($gallery_button_url);?>" class="page-btn"><?php echo esc_html($gallery_button_title);?></a>
                <?php endif;?>
            </div>
        </section>
    </div>
</div>
<div class="cta">
    <div class="container">
        <section class="cta-sec text-center">
<<<<<<< HEAD
            <h3><?php the_field('contact_title');?></h3>
            <?php the_field('contact_content');?>
=======
            <h3>Anything you want to know about Osho Meditation and Events?</h3>
            <p>If you have any queries regarding the Osho meditation, Osho Maitreya, And Events to be held here in Osho
                Maitreya, then you can contact us for more information. </p>
>>>>>>> 5c25aa283e629d17ff4d5c0c78b9bbb6a8baeba9
            <div class="more-link mt-5 text-center">
                <?php $contact_button = get_field('contact_button');?>
                <?php if($contact_button):
                    $contact_button_url = $contact_button['url'];
                    $contact_button_title = $contact_button['title'];
                    ?>
                <a href="<?php echo esc_url($contact_button_url);?>" class="page-btn dark"><?php echo  esc_html($contact_button_title);?></a>
                <?php endif;?>
            </div>
        </section>
    </div>
</div>

<?php get_footer();?>
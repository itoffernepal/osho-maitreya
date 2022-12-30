<?php
/*Template Name: Contact Us page */
get_header(); ?>
<!-- Banner Image -->
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
        <section class="pb-sec pb-2">
            <!-- title -->
            <h2><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <!-- links -->
                    <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="contact-form position-relative">
    <div class="container">
        <section class="cf-sec">
            <div class="form-content">
                <div class="section-intro text-start">
                    <!-- form title -->
                    <h2><?php the_field('form_title'); ?></h2>
                    <!-- form subtitle -->
                    <p><?php the_field('form_subtitle'); ?></p>
                </div>
                <!-- contact form -->
                <!-- <form autocomplete="off">
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
                                <input class="floating-input" type="number" placeholder=" ">
                                <label>Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="email" placeholder=" ">
                                <label>Your Email</label>
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
                </form> -->
                <?php //echo do_shortcode('[contact-form-7 id="75" title="Contact Form"]');
                ?>
            </div>
            <div class="map large-pt position-relative">
                <div class="map-detail">
                    <!-- location title -->
                    <h3><?php the_field('location_title'); ?></h3>
                    <!-- location content -->
                    <?php the_field('location_content'); ?>
                    <div class="footer-content">
                        <ul>
                            <!-- address -->
                            <li><i class="fas fa-map-marker-alt"></i> <span><?php the_field('address'); ?></span>
                            </li>
                            <!-- phone number -->
                            <li><i class="fas fa-phone"></i>
                                <span>
                                    <a href="tel:<?php the_field('phone_1'); ?>"><?php the_field('phone_1'); ?></a>,
                                    <a href="tel:<?php the_field('phone_2'); ?>"><?php the_field('phone_2'); ?></a>,
                                    <a href="tel:<?php the_field('phone_3'); ?>"><?php the_field('phone_3'); ?></a> </span>
                            </li>
                            <!-- email address -->
                            <li><i class="fas fa-envelope"></i> <span><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- google maps -->
                <?php the_field('google_map'); ?>
            </div>
        </section>
    </div>
    <div class="line-img">
        <!-- bg image -->
        <?php $bg = get_field('bg_image'); ?>
        <?php if (!empty($bg)) :
        ?>
            <img src="<?php echo esc_url($bg['url']); ?>" alt="<?php echo esc_html($bg['alt']); ?>">
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
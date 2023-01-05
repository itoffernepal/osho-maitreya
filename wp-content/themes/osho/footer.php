<footer>
    <div class="container">
        <section class="footer-sec">
            <div class="row">
                <div class="col-lg-5 ">
                    <div class="footer-content">
                        <!-- Footer Logo -->
                        <a class="footer-logo" href="<?php echo site_url(); ?>">
                            <?php $footer_logo = get_field('footer_logo', 'option'); ?>
                            <?php if (!empty($footer_logo)) : ?>
                                <img src="<?php echo esc_url($footer_logo['url']); ?>" class="img-fluid" alt="">
                            <?php endif; ?>
                        </a>

                        <!-- Footer Content section -->
                        <?php the_field('footer_content', 'option'); ?>
                        <!-- Footer Icons -->
                        <ul class="social-media">
                            <?php if (have_rows('footer_icons', 'option')) : ?>
                                <?php while (have_rows('footer_icons', 'option')) : the_row();
                                    $icon = get_sub_field('icon');
                                ?>
                                    <li><a href="<?php the_sub_field('icon_url', 'option'); ?>" target="_blank"><?php echo $icon; ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <!-- -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content mt-5">
                        <!-- Quick Link Title -->
                        <h3><?php the_field('quick_links_title', 'option'); ?></h3>
                        <!-- Quick Link Menu -->
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'quick-links',
                                'container' => '',
                                'items_wrap' => '<ul>%3$s</ul>',

                            )
                        );
                        ?>
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-content mt-5">
                        <!-- Contact Us Title -->
                        <h3><?php the_field('contact_us_title', 'option'); ?></h3>
                        <ul>
                            <!-- Address title and icons -->
                            <li><?php the_field('address_icon', 'option'); ?> <span><?php the_field('address', 'option'); ?></span>
                            </li>
                            <!-- Phone Icons and numbers -->
                            <li><?php the_field('phone_icon', 'option'); ?>
                                <span>
                                    <a href="tel:<?php the_field('phone_number_1', 'option'); ?>"><?php the_field('phone_number_1', 'option'); ?></a>,
                                    <a href="tel:<?php the_field('phone_number_2', 'option'); ?>"><?php the_field('phone_number_2', 'option'); ?></a>,
                                    <a href="tel:<?php the_field('phone_number_3', 'option'); ?>"><?php the_field('phone_number_3', 'option'); ?></a>
                                </span>
                            </li>
                            <!-- Email Icon and address -->
                            <li><?php the_field('email_icon', 'option'); ?> <span><a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="copy-right text-center p-2">
        <!-- Copyright section -->
        <?php the_field('copyright', 'option'); ?>
        <!-- powered section -->
        <?php
        $powered = get_field('powered_by', 'option');
        if ($powered) :
            $powered_link = $powered['url'];
            $powered_title = $powered['title'];
        ?>
            <a href="<?php echo esc_url($powered_link); ?>" target="_blank"><?php echo esc_html($powered_title); ?></a>
        <?php endif; ?>
        <!--  -->
    </div>
    <div id="btn-scrollup">
        <a title="Go Top" class="scrollup button-circle" href="#"><i class="bi bi-chevron-up"></i></a>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
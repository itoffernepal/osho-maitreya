<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <div <?php body_class(array('site-content')); ?>>
        <header>
            <div class="main-menu">
                <nav id="navbar-main" class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                        <!-- Header Logo -->
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <a href="<?php echo site_url(); ?>" class="navbar-brand">
                            <?php if ($image[0]) { ?>
                                <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="<?php echo get_bloginfo('name'); ?>">
                            <?php  } ?>
                            <!-- sticky slider logo -->
                            <img src="<?php echo get_theme_mod('osho_img_handle'); ?>" class="img-fluid on-hover" alt="<?php echo get_bloginfo('name'); ?>">
                        </a>
                        <!-- end -->

                        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                            <!-- Header Menu Section -->
                            <?php
                            $menu_name = 'primary-menu';
                            $location = get_nav_menu_locations();
                            $menu = wp_get_nav_menu_object($location[$menu_name]);
                            $menuitems = wp_get_nav_menu_items($menu->term_id);
                            $header_menu_id = get_menu_id('primary-menu');

                            $header_menus = wp_get_nav_menu_items($header_menu_id);
                            ?>
                            <?php
                            if (!empty($header_menus)  && is_array($header_menus)) {
                            ?>
                                <ul class="navbar-nav ">
                                    <?php
                                    foreach ($header_menus as $menu_item) {
                                        if (!$menu_item->menu_item_parent) { //checking the item are parent?
                                            $child_menu_items = get_child_menu_items($header_menus, $menu_item->ID);
                                            $has_children = !empty($child_menu_items) && is_array($child_menu_items);

                                            if (!$has_children) {
                                    ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?>
                                                    </a>
                                                </li>
                                            <?php
                                            } else {
                                            ?>
                                                <li class="nav-item has-sub">
                                                    <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <?php
                                                        foreach ($child_menu_items as $child) {
                                                        ?>
                                                            <li>

                                                                <a href="<?php echo esc_url($child->url); ?>"><?php echo esc_html($child->title); ?></a>

                                                            </li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            <?php } ?>
                            <!-- Header Menu End -->
                        </div>
                        <div class="nav-right d-flex align-items-center">
                            <div class="lang text-end ms-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/lang-switch.png" alt="" class="img-fluid">
                            </div>
                            <div class="mobile-menu-icon d-none ms-4">
                                <span class="icon"><i class="fas fa-bars"></i></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Mobile menu section start -->
        <div class="mobile-navigation d-none">
            <div class="side-menu-header mb-3">
                <div class="logo container">
                    <!-- Header Logo -->
                    <a href="<?php echo site_url(); ?>" class="navbar-brand m-0">
                        <!-- new logo -->
                        <img src="<?php echo get_theme_mod('osho_img_handle'); ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <span class="close-icon"><i class="fas fa-times"></i></span>
            </div>
            <div id="menu-primary-menu" class="mobile-menu my-5">
                <!-- Header Menu Section -->
                <?php
                $menu_name = 'primary-menu';
                $location = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($location[$menu_name]);
                $menuitems = wp_get_nav_menu_items($menu->term_id);
                $header_menu_id = get_menu_id('primary-menu');

                $header_menus = wp_get_nav_menu_items($header_menu_id);
                ?>
                <?php
                if (!empty($header_menus)  && is_array($header_menus)) {
                ?>
                    <ul class="navbar-nav ">
                        <?php
                        foreach ($header_menus as $menu_item) {
                            if (!$menu_item->menu_item_parent) { //checking the item are parent?
                                $child_menu_items = get_child_menu_items($header_menus, $menu_item->ID);
                                $has_children = !empty($child_menu_items) && is_array($child_menu_items);

                                if (!$has_children) {
                        ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?>
                                        </a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li class="nav-item has-sub">
                                        <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?>
                                        </a>
                                        <ul class="sub-menu">
                                            <?php
                                            foreach ($child_menu_items as $child) {
                                            ?>
                                                <li>

                                                    <a href="<?php echo esc_url($child->url); ?>"><?php echo esc_html($child->title); ?></a>

                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                        <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                <?php } ?>
                <!-- Header Menu End -->

            </div>
            <ul class="social-media">
                <?php if (have_rows('footer_icons', 'option')) : ?>
                    <?php while (have_rows('footer_icons', 'option')) : the_row();
                        $icon = get_sub_field('icon');
                    ?>
                        <li><a href="<?php the_sub_field('icon_url', 'option'); ?>" target="_blank"><?php echo $icon; ?></a></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <!-- Mobile menu section end -->
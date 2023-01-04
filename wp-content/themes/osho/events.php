<?php 
/*Template Name: All Events page */
get_header('2');?>
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2><?php the_title();?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('/')?>">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>

<div class="all-events">
    <div class="container">
        <section class="all-events-sec">
            <div class="section-intro">
                <div class="section-title">
                    <h2><?php the_field('title'); ?></h2>
                </div>
                <?php the_field('content'); ?>
            </div>
            

            <?php $events = array(
                'post_type' => 'ourevent',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DES',
            );
            $event_query = new WP_Query($events);
            
            if($event_query->have_posts()) :
                while($event_query->have_posts()) : $event_query->the_post();
            ?>
            <?php $date= get_field('event_end_date');?>
            <?php if(time() < strtotime($date)){?>     
            <div class="event-brief wow pulse">
                <h3 class="event-date"><?php echo get_the_date();?></h3>
                <div class="row g-0 ">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="eb-img">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="eb-time">
                        <h2><?php the_title();?></h2>
                            <ul>
                                <li><?php the_field('event_day');?></li>
                                <li><?php the_field('event_start_date');?> – <?php the_field('event_end_date');?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="eb-text">
                            <?php the_field('event_content');?>
                            <ul>
                                <li><?php the_field('event_quotation');?></li>
                                <li>Facilitated by: <?php the_field('event_faciliated_by');?></li>
                            </ul>
                            <a href="#" class="page-btn dark event_modal_popup_btn" data-event-id="<?php echo get_the_ID();?>" data-event-title="<?php echo  get_the_title();?>">Book now</a>

                        </div>
                    </div>
                </div>
                <div class="line-img wow fadeInLeft" data-wow-delay="0.5s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/line2.png" alt="">
                </div>
                
            </div>
            <?php }?>
            
            <?php endwhile; wp_reset_postdata();?>
            <?php endif;?>
                <!-- modalsection start -->
                <?php get_template_part('pagetemplate/content','modal');?>
                <!-- modalsection end -->
        </section>
    </div>
</div>


<?php get_footer();?>
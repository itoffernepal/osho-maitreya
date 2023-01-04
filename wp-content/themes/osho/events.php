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
                
              
                   
            <div class="event-brief">
                <h3 class="event-date"><?php echo get_the_date();?></h3>
                <div class="row g-0 ">
                    <div class="col-lg-3">
                        <div class="eb-img">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="eb-time">
                        <h2><?php the_title();?></h2>
                            <ul>
                                <li><?php the_field('event_day');?></li>
                                <li><?php the_field('event_start_date');?> – <?php the_field('event_end_date');?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                <div class="line-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/line2.png" alt="">
                </div>
                
            </div>
            <?php }?>
            
            <?php endwhile; wp_reset_postdata();?>
            <?php endif;?>
                <div class="modal fade form-popup" id="event_registration_form" tabindex="-1" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body form-content p-4">
                                <div class="section-intro text-start mb-4">
                                    <h2><?php the_field('registration_form_title','option');?><span class="modal_event_title"></span></h2>
                                    <?php the_field('registration_form_subtitle','option');?>
                                </div>
                                <?php 
                $form_html = do_shortcode('[contact-form-7 id="437" title="Registration Form"]');
                // Add the post title as a hidden field
                $form_html = str_replace('</form>', '<input type="hidden" class="event_title" name="event_title" value="" /></form>', $form_html);
                echo $form_html;
                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>


<?php get_footer();?>
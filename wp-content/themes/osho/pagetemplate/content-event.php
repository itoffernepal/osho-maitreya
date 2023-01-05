 <!-- condition to check the event date  -->
 <?php $date = get_field('event_end_date'); ?>
 <?php if (time() < strtotime($date)) { ?>
     <div class="event-brief wow pulse">
         <!-- date of event posted -->
         <?php if (is_front_page()) {
                // The current page is the home page 
                // Do not display the date 
            } else { ?>
             <h3 class="event-date"><?php echo get_the_date(); ?></h3>
         <?php } ?>
         <div class="row g-0 ">
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="eb-img">
                     <!-- event thumbnail image -->
                     <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="eb-time">
                     <!-- event title -->
                     <h2><?php the_title(); ?></h2>
                     <!-- Event start and end date -->
                     <ul>
                         <li><?php the_field('event_day'); ?></li>
                         <li><?php the_field('event_start_date'); ?> – <?php the_field('event_end_date'); ?></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-6 col-md-12">
                 <div class="eb-text">
                     <!-- event content -->
                     <?php the_field('event_content'); ?>
                     <!-- quotation  and faciliated by -->
                     <ul>
                         <li><?php the_field('event_quotation'); ?></li>
                         <li>Facilitated by: <?php the_field('event_faciliated_by'); ?></li>
                     </ul>
                     <!-- Book Now button -->
                     <a href="#" class="page-btn dark event_modal_popup_btn" data-event-id="<?php echo get_the_ID(); ?>" data-event-title="<?php echo  get_the_title(); ?>">Book now</a>

                 </div>
             </div>
         </div>
         <!-- event bg image -->
         <div class="line-img wow fadeInLeft" data-wow-delay="0.5s">
             <img src="<?php echo get_template_directory_uri(); ?>/images/line2.png" alt="">
         </div>

     </div>
 <?php } ?>
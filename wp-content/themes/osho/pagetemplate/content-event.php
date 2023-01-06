<?php $date = get_field('event_end_date'); ?>
<?php if (time() < strtotime($date)) { ?>
    <div class="event-brief wow pulse">
        <h3 class="event-date"><?php echo get_the_date(); ?></h3>
        <div class="row g-0 ">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="eb-img">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="eb-time">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li><?php the_field('event_day'); ?></li>
                        <li><?php the_field('event_start_date'); ?> – <?php the_field('event_end_date'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="eb-text tedt">
                    <?php the_field('event_content'); ?>
                    <ul>
                        <li><?php the_field('event_quotation'); ?></li>
                        <li>Facilitated by: <?php the_field('event_faciliated_by'); ?></li>
                    </ul>
                    <a href="#" class="page-btn dark event_modal_popup_btn" data-bs-toggle="modal" data-event-id="<?php echo get_the_ID(); ?>" data-event-title="<?php echo  get_the_title(); ?>">Book now</a>

                </div>
            </div>
        </div>
        <div class="line-img wow fadeInLeft" data-wow-delay="0.5s">
            <img src="<?php echo get_template_directory_uri(); ?>/images/line2.png" alt="">
        </div>

    </div>
<?php } ?>
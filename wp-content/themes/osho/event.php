<?php 
/*Template Name: Event page */
get_header('2');?>
<div class="page-banner" style="background: url(images/page-banner.png);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2>Events</h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Events</li>
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
                    <h2><?php the_field('upcoming_title'); ?></h2>
                </div>
                <?php the_field('upcoming_content'); ?>
            </div>
            
            <div class="event-brief">
                <h3 class="event-date">December 7, 2022</h3>
                <div class="row g-0 ">
                    <div class="col-lg-3">
                        <div class="eb-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/osho.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="eb-time">
                        <h2>Osho Meditative Therapy</h2>
                            <ul>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/line2.png" alt="">
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
                                                <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
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
                                                <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
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
                <?php $upcoming_button = get_field('upcoming_event_button'); ?>
                <?php if ($upcoming_button) :
                    $upcoming_button_url    = $upcoming_button['url'];
                    $upcoming_button_title  = $upcoming_button['title'];
                ?>
                    <a href="<?php echo esc_url($upcoming_button_url); ?>" class="page-btn dark"><?php echo esc_html($upcoming_button_title); ?></a>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>


<?php get_footer();?>
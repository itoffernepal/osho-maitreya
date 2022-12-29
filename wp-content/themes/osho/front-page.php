<?php get_header();?>

<div class="hero">
    <section class="hero-sec p-0">
        <div class="hero-banner">
            <div class="hero-slider">
                <div class="slide-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/hero-img.jpg" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/hero-img.jpg" class="img-fluid">
                </div>
                <div class="slide-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/hero-img.jpg" class="img-fluid">
                </div>
            </div>
            <div class="hero-content text-black">
                <div class="container">
                    <div class="banner-content">
                        <h1><?php the_field('banner_title');?></h1>
                        <?php the_field('banner_content');?>
                        <a href="#" class="page-btn">Explore more</a>
                    </div>
                    <div class="scroll-btn text-center">
                        <a href="#" class="down-anchor"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<div class="audio-books">
    <div class="container">
        <section class="ab-sec">
            <div class="section-intro">
                <div class="section-title">
                    <h2>Latest Audiobooks</h2>
                </div>
                <p>With these immortal words, Osho both dictates his epitaph and dispenses with his biography.</p>
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
                <a href="#" class="page-btn dark mt-5">View all</a>
            </div>
        </section>
    </div>
    <div class="line-img">
        <img src="<?php echo get_template_directory_uri();?>/images/line.png" alt="">
    </div>
</div>
<div class="about position-relative">

    <div class="about-img">
        <div class="row">
            <div class="offset-lg-7 col-lg-5">
                <div class="abt-video position-relative h-100">
                    <img src="<?php echo get_template_directory_uri();?>/images/about-img.png" class="img-fluid" alt="">
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
                            <h2>About Osho</h2>
                        </div>
                        <p>Never Born – Never Died Only visited this planet Earth between December 11, 1931 and January
                            19, 1990</p>
                    </div>
                    <p>Born in the small city of Kuchwada in India in 1931, Osho attained enlightenment at the age of
                        twenty-one on 21st March 1953. Osho started his spiritual work in the early Seventies and in no
                        time attracted the attention of seekers from all around the world. Thousands of young people
                        flocked to the exotic ashram in Pune, India to meditate in his presence. Later in 1981, Osho
                        travelled to America, where he established his spiritual commune, Rajneeshpuram. During
                        1985-1986 Osho also made a world tour and travelled to 21 different countries including Nepal.
                    </p>
                    <div class="text-center more-link">
                        <a href="#" class="page-btn mt-5">Explore more</a>
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
                    <h2>About Osho Maitreya</h2>
                </div>
                <p>Osho Maitreya is a pristine and peaceful space for the spiritually inclined. Seekers from world-over,
                    converge here to participate in Meditation retreats and benefit from the pulsating energy-field that
                    has built up with the continued practice of Meditation.</p>
            </div>
            <div class="om-slider">
                <div class="slide-item">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider-img">
                                <img src="<?php echo get_template_directory_uri();?>/images/slider-img.png" class="slide-img" alt="">
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="slider-text">
                                <h2>Osho Maitreya for Meditation 1</h2>
                                <p>Osho Maitreya is a pristine and peaceful space for the spiritually inclined. Seekers
                                    from world-over, converge here to participate in Meditation retreats and benefit
                                    from the pulsating energy-field that has built up with the continued practice of
                                    Meditation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
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
                </div>
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
                        <span class="total-<?php echo get_template_directory_uri();?>/images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-<?php echo get_template_directory_uri();?>/images">10 Photos</span>
                        <a href="#">

                            <img src="<?php echo get_template_directory_uri();?>/images/gallery2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <span class="total-<?php echo get_template_directory_uri();?>/images">10 Photos</span>
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



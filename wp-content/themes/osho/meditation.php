<?php 
/*Template Name: Meditation page */
get_header();?>
<div class="page-banner" style="background: url(images/page-banner.png);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2>Meditation</h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Meditation</li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="meditation ss-page">
    <div class="container">
        <section class="meditation-sec">
            <div class="section-intro text-start">
                <div class="section-title">
                    <h2>Osho’s Take on Meditation</h2>
                </div>
            </div>
            <div class="lg-image text-center">
                <figure>
                    <img src="<?php echo get_template_directory_uri();?>/images/meditation.png" class="img-fluid" alt="">
                </figure>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="om-text meditation-text text-center">
                        <p>
                            “In Buddha’s time, dynamic methods of meditation were not needed. People were more simple,
                            more
                            authentic. They lived a more real life. Now, people are living a very repressed life, a very
                            unreal life. When they don’t want to smile, they smile. When they want to be angry, they
                            show
                            compassion. People are false, the whole life pattern is false. People are just acting, not
                            living. Many incomplete experiences go on being collected, piled up inside their minds.
                        </p>
                        <p>
                            “Just sitting directly in silence won’t help. The moment you will sit silently, you will see
                            all
                            sorts of things moving inside you; you will feel it almost impossible to be silent. First
                            throw
                            those things out so you come to a natural state of rest. Real meditation starts only when
                            you
                            are at rest.”
                        </p>
                        <p>
                            OSHO The Discipline of Transcendence, Vol. 2, Discourse 5
                        </p>
                        <p>
                        All of Osho’s active meditations involve a beginning stage of activity — sometimes intense and physical — followed by a period of silence. All are accompanied by music that has been specially composed to guide the meditator through the different stages. Osho has also recommended different meditations for different times of the day. Follow the links below for details.
                        </p>


                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer();?>
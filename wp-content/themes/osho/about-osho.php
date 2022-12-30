<?php 
/*Template Name: About osho page */
get_header('2');?>
<div class="page-banner" style="background: url(<?php the_post_thumbnail_url();?>">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2><?php the_title();?></h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('/');?>">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="abt-osho ss-page">
    <div class="container">
        <section class="ao-sec">
            <div class="section-intro text-start">
                <div class="section-title">
                    <h2><?php the_title();?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="ao-text">
                        <div class="text-center ao-highlight">
                            <p>Never Born – Never Died Only visited this planet Earth between December 11, 1931 and
                                January 19, 1990</p>
                        </div>
                        <p>His thousands of hours of extemporaneous talks, spoken to people from around the world over a
                            twenty-year period, are all recorded, often on video. The transcriptions of these talks are
                            published in hundreds of titles in dozens of languages. In these talks, the human mind is
                            put under the microscope as never before, analyzed to the smallest wrinkle. Mind as
                            psychology, mind as emotion, mind as mind/body; mind as moralist, mind as belief; mind as
                            religion, mind as history, mind as politics and social evolution – all examined, studied,
                            and integrated and then graciously left behind in the essential quest for transcendence.
                        </p>
                        <p>
                            In the process Osho exposes hypocrisy and humbug wherever he sees it. As the author, Tom
                            Robbins so eloquently said:</p>
                        <p>
                            “I recognize the emerald breeze when it rattles my shutters. And Osho is like a hard, sweet
                            wind, circling the planet, blowing the beanies off of rabbis and popes, scattering the lies
                            on the desks of the bureaucrats, stampeding the jackasses in the stables of the powerful,
                            lifting the skirts of the pathologically prudish and tickling the spiritually dead back to
                            life.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ao-img">
                        <img src="<?php echo get_template_directory_uri();?>/images/abt-osho.png" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="quote-part small-p">
                <div class="quotation">
                    Osho is a very beautiful word. It should be added to every language. Just the sound is beautiful in
                    the first place: Osho. It shows respect, it shows love, it shows gratitude. It is not just a dry
                    word like ‘Reverend’. It is a very loving and friendly word, almost having the sense of ‘The
                    Beloved’.
                </div>
            </div>
            <div class="lg-image text-center">
                <figure>
                    <img src="<?php echo get_template_directory_uri();?>/images/lg-img.png" class="img-fluid" alt="">
                </figure>
            </div>
            <p>So what to say of Osho? The ultimate deconstructionist? A visionary who becomes the vision? Certainly a
                proposal to existence – that it is everyone’s birthright to enjoy the ultimate experience of being a
                buddha. For that, Osho says, “There is only one path, which goes inwards, where you will not find a
                single human being, where you will find only silence, peace. Then you will find yourself, and after that
                even you will not be there.”</p>
            <p>
                His legacy?</p>


                <div class="quote-part small-p">
                <div class="quotation">
                I don’t have any biography. And whatsoever is thought to be biography is utterly meaningless. On what date I was born, in what country I was born, does not matter. What matters is what I am now, right here.
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer();?>
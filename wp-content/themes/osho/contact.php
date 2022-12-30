<?php 
/*Template Name: Contact Us page */
get_header();?>
<div class="page-banner" style="background: url(images/page-banner.png);">
    <div class="container">
        <section class="pb-sec pb-2">
            <h2>Contact</h2>
            <nav aria-label="breadcrumb" class="page-menu">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="contact-form position-relative">
    <div class="container">
        <section class="cf-sec">
            <div class="form-content">
                <div class="section-intro text-start">
                    <h2>Leave us your info</h2>
                    <p>and we’ll get back to you</p>
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
                                <input class="floating-input" type="number" placeholder=" ">
                                <label>Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="floating-label form-group">
                                <input class="floating-input" type="email" placeholder=" ">
                                <label>Your Email</label>
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
            <div class="map large-pt position-relative">
                <div class="map-detail">
                    <h3>Our Location</h3>
                    <p>About .... miles (south/north/east/west) of ......, Osho Maitreya has blossomed on the outskirts
                        of ...... offering a clean, green, aesthetic and peaceful environment for those on the inner
                        journey.</p>
                    <div class="footer-content">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <span>Japan, 〒630-8392 Nara, Chuincho, １１</span>
                            </li>
                            <li><i class="fas fa-phone"></i> <span><a href="tel:+81 123 456789">+81 123 456789</a>, <a
                                        href="tel:+81 123 456780">+81 123 456780</a>, <a href="tel:+81 123 456781">+81
                                        123 456781</a> </span></li>
                            <li><i class="fas fa-envelope"></i> <span><a
                                        href="mailto:contact@oshomaitreya.com">contact@oshomaitreya.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.0854218663403!2d135.82953901475867!3d34.67779349195336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001398b9704d609%3A0x2c31a736082aae68!2zMTEgQ2jFq2luY2jFjSwgTmFyYSwgNjMwLTgzOTIsIEphcGFu!5e0!3m2!1sen!2snp!4v1672305371694!5m2!1sen!2snp"
                    width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
    <div class="line-img">
                <img src="images/line.png" alt="">
            </div>
</div>


<?php get_footer();?>
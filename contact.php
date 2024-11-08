<?php
include('includes/nav.php');

// $URL = explode("/", $_SERVER['QUERY_STRING']);
// // echo "<pre>";
// // print_r($URL);
// // echo "</pre>";
// require_once($URL[0] . ".php");
?>
<section class="page-title-area page-title-bg" style="background-image: url(assets/img/section-bg/titlebg01.jpg);">
    <div class="container">
        <h1 class="page-title">Contact Us</h1>

        <ul class="breadcrumb-nav">
            <li><a href="index.php">Home</a></li>
            <li><i class="fas fa-angle-right"></i></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--====== Page Title End ======-->

<!--====== Contact Info Section Start ======-->
<section class="section-gap contact-top-wrappper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="contact-info-wrapper">
                    <div class="single-contact-info">
                        <div class="single-contact-info">
                            <h3 class="info-title">
                                <i class="fal fa-map-marker-alt"></i> Address
                            </h3>
                            <p>
                                G/7/5 Al Mizab Estate Old Sonal Factory Vatava Narol Road Vatva Ahmedabad Gujrat 382440
                            </p>
                        </div>
                        <div class="single-contact-info">
                            <h3 class="info-title">
                                <i class="fal fa-coffee"></i> Get In Touch
                            </h3>
                            <ul>
                                <!-- <li>
                                    <span>Phone Number</span><a href="tel:+012020200">+(402) 763 282 46</a>
                                </li> -->
                                <li>
                                    <span>Email Address</span><a
                                        href="mailto:support@gmail.com">info@hinuspharmaceutical.com</a>
                                </li>
                                <!-- <li>
                                    <span>Hotline</span><a href="tel:+12345678">12345678</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="single-contact-info">
                            <h3 class="info-title">
                                <i class="fal fa-comments"></i> Follow Us
                            </h3>
                            <p>
                                Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore
                            </p>
                            <p class="social-icon">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube-square"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="working-hour-chart">
                    <h2 class="chart-title">Working Hour</h2>
                    <ul>
                        <li>
                            <span><i class="far fa-angle-right"></i>Monday</span>
                            <span>8:00am to 9:00pm</span>
                        </li>
                        <li>
                            <span><i class="far fa-angle-right"></i>Tuesday</span>
                            <span>8:00am to 9:00pm</span>
                        </li>
                        <li>
                            <span><i class="far fa-angle-right"></i>Wednesday</span>
                            <span>8:00am to 9:00pm</span>
                        </li>
                        <li>
                            <span><i class="far fa-angle-right"></i>Thursday</span>
                            <span>8:00am to 9:00pm</span>
                        </li>
                        <li>
                            <span><i class="far fa-angle-right"></i>Friday</span>
                            <span>8:00am to 9:00pm</span>
                        </li>
                        <li>
                            <span><i class="far fa-angle-right"></i>Saturday</span>
                            <span>8:00am to 9:00pm</span>
                        </li>
                        <li>
                            <span><i class="far fa-angle-right"></i>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appointment-section">
    <div class="container container-1500">
        <div class="appointment-form-two style-two">
            <div class="appointment-image" style="background-image: url(assets/img/tile-gallery/08.png); background-color: white;">
            </div>
            <div class="form-wrap">
                <div class="section-heading mb-50">
                    <h2 class="title">Leave a Message</h2>
                    <span class="tagline">We're Ready To Help You</span>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.3s">
                                <input type="text" placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.4s">
                                <input type="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.4s">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.4s">
                                <input type="text" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.4s">
                                <textarea id="message" type="message" placeholder="Write Message...."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.8s">
                                <button type="submit" class="template-btn">
                                    Send Us Message <i class="far fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--====== Back to Top Start ======-->

<?php
include('includes/footer.php');
?>
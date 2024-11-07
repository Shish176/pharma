<?php
include('includes/nav.php');
include('includes/products.php');

// $URL = explode("/", $_SERVER['QUERY_STRING']);
// // echo "<pre>";
// // print_r($URL);
// // echo "</pre>";
// require_once($URL[0] . ".php");
?>
<!-- Hero Slider Section -->
<section class="hero-slider hero-slider-two style-two">
    <div class="hero-slider-active">
        <div class="single-hero-slider">
            <div class="hero-slider-bg bg-size-cover"
                style="background-image: url(assets/img/hero-img/hero-slider-6.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="hero-content">
                            <span class="tagline" data-animation="fadeInDown" data-delay="0.5s">A choose & quality pharma ceticul product, we provide best quality pharmaceutical.</span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay="0.6s">Love Respect & Care</h1>
                            <a href="#" class="template-btn template-btn-bordered" data-animation="fadeInUp"
                                data-delay="0.7s">Explore Our Service <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slider">
            <div class="hero-slider-bg bg-size-cover"
                style="background-image: url(assets/img/hero-img/hero-slider-7.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="hero-content">
                            <span class="tagline" data-animation="fadeInDown" data-delay="0.5s">We are making a range of prescription medicine & nutrition supplement, skin and beauty product.</span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay="0.6s">Love Respect & Care</h1>
                            <a href="#" class="template-btn template-btn-bordered" data-animation="fadeInUp"
                                data-delay="0.7s">Explore Our Service <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider-arrow"></div>
</section>

<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<!-- jQuery (Slick Slider depends on jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Slider JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


<!-- Initialize Slick Slider -->
<script>
    $(document).ready(function() {
        $('.hero-slider-active').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            arrows: false,
            dots: false,
            fade: true,
            speed: 1000,
            pauseOnHover: false,
            pauseOnFocus: false
        });
    });
</script>

<section class="feature-section pharmacy-feature">
    <div class="container wow fadeInUp" data-wow-delay="0.3s">
        <div class="row no-gutters justify-content-center feature-loop">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="iconic-box-three">
                    <div class="icon">
                        <i class="flaticon-medicine"></i>
                    </div>
                    <h4 class="title">Medicine Care</h4>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu
                    </p>
                    <a href="#" class="box-link">Read More <i class="far fa-plus"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="iconic-box-three featured-box">
                    <div class="icon">
                        <i class="flaticon-stethoscope"></i>
                    </div>
                    <h4 class="title">Doctors Services</h4>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu
                    </p>
                    <a href="#" class="box-link">Read More <i class="far fa-plus"></i></a>

                    <span class="big-icon"><i class="flaticon-stethoscope"></i></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="iconic-box-three">
                    <div class="icon">
                        <i class="flaticon-flask"></i>
                    </div>
                    <h4 class="title">Medical Equipment</h4>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu
                    </p>
                    <a href="#" class="box-link">Read More <i class="far fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section section-gap">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-lg-6 col-md-10">
                <div class="about-img">
                    <img src="assets/img/section-img/about-img-3.jpg" alt="Image">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                <div class="about-content mt-md-50">
                    <div class="section-heading mb-20">
                        <span class="tagline color-tertiary">About Hinus</span>
                        <h2 class="title">
                            HINUS Pharmaceuticals
                        </h2>
                    </div>
                    <p>
                        Our vision at HINUS Pharmaceuticals is to be a trusted partner in healthcare,
                        offering solutions that make a real difference. Through a focus on research and development,
                        we continue to advance our capabilities, bringing new and improved formulations to market.
                        We believe in the power of science, collaboration,
                        and community-driven growth, and we are committed to expanding access to healthcare for everyone.
                    </p>
                    <!-- <ul class="check-list-two mt-40">
                        <li class="wow fadeInUp" data-wow-delay="0.3s">
                            <h5>Painless Treatment</h5>
                            <p>
                                Our products are certified by reputable organic.
                            </p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s">
                            <h5>Top Equipment</h5>
                            <p>
                                Our products are certified by reputable organic.
                            </p>
                        </li>
                    </ul> -->
                    <a href="#" class="template-btn template-btn-fourth mt-40 wow fadeInUp" data-wow-delay="0.3s">
                        Learn More <i class="far fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appointment-section">
    <div class="container container-1500">
        <div class="appointment-form-two style-two">

            <div class="form-wrap">
                <div class="section-heading mb-50">
                    <span class="tagline">Why Choose Us</span>
                    <h2 class="title">We Have 25 Years Experience in Medical Health Services</h2>
                    <!-- <p class="text-left mb-40" style="font-size: 1.1rem; color: #333;">
                        We understand that choosing the right provider is essential. Let us know why you are interested in our services or what you value the most.
                    </p> -->
                    <p class="text-left mb-40" style="font-size: 1.1rem; color: #333;">
                        At HINUS PHARMACEUTICAL, we are dedicated to providing the higest quality pharmaceutical, Natraceuticals & Skin & Beauty
                        product at the most competitive price. We have created a unique protfolio of Nutraceuticals product with unique Test.
                        We are committed to providing our customer with the best possible service and products. When you choose Hinus Pharmaceutical
                        can be sure you are getting the best quality healthcare products.
                    </p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.3s">
                                <input type="text" placeholder="Experience Doctor">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.4s">
                                <input type="text" placeholder="Painless Treatment">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.4s">
                                <input type="text" placeholder="Top Equipment">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.4s">
                                <input type="text" placeholder="24/7 Advance Care">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.7s">
                                <textarea id="message" type="message" placeholder="Any Additional Comments or Questions?"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.8s">
                                <button type="submit" class="template-btn">
                                    Submit<i class="far fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="appointment-image" style="background-image: url(assets/img/tile-gallery/06.jpg);">
            </div>
        </div>
    </div>
</section>

<section class="feature-medicine-section section-gap">
    <div class="container">
        <!-- <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 col-md-10 order-lg-last">
                <div class="tile-gallery-three">
                    <div class="image-one">
                        <img src="assets/img/tile-gallery/06.jpg" alt="Image">
                    </div>
                    <div class="image-two">
                        <img class="animate-float-bob-y" src="assets/img/tile-gallery/07.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10">
                <div class="feature-content pr-xl-5 mt-md-50">
                    <div class="section-heading mb-20">
                        <span class="tagline color-tertiary">Features Medicine</span>
                        <h2 class="title">
                            Our Medicine for Good Health
                        </h2>
                    </div>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloreue
                        laudantium totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </p>

                    <a href="#" class="template-btn template-btn-tertiary mt-40  wow fadeInLeft"
                        data-wow-delay="0.4s">Learn More <i class="far fa-plus"></i></a>
                </div>
            </div>
        </div> -->
        <div class="cta-boxes mt-50">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="cta-boxed-four mt-30"
                        style="background-image: url(assets/img/cta-img/cta_bg_4_1.jpg);">
                        <span class="cta-tagline wow fadeInDown" data-wow-delay="0.3s">Get Up to 50% OFF</span>
                        <h3 class="cta-title" style="color: white;">Blood Pressure Medicine</h3>

                        <a href="#" class="template-btn template-btn-white wow fadeInUp" data-wow-delay="0.4s">Shop
                            Now <i class="far fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="cta-boxed-four mt-30"
                        style="background-image: url(assets/img/cta-img/cta_bg_4_2.jpg);">
                        <span class="cta-tagline wow fadeInDown" data-wow-delay="0.3s">Get Up to 50% OFF</span>
                        <h3 class="cta-title">On All Covid-19 Vaccine</h3>

                        <a href="#" class="template-btn template-btn-fourth wow fadeInUp" data-wow-delay="0.4s">Shop
                            Now <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-tab-section bg-color-grey section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="section-heading text-center mb-70">
                    <span class="tagline color-tertiary">Pharmacy Products</span>
                    <h2 class="title">
                        Our Popular Medical Products That We Provide
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="tab-content">
                    <?php foreach ($products as $category => $items) { ?>
                        <h3 class="my-3"><?php echo htmlspecialchars($category); ?></h3>
                        <div class="tab-pane fade show active">
                            <div class="row justify-content-center product-boxes">
                                <?php foreach ($items as $item) { ?>
                                    <div class="col-lg-3 col-sm-6 mb-4">
                                        <div class="card ">
                                            <!-- <img src="<?php echo htmlspecialchars($item['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>"> -->
                                            <div class="card-body">
                                                <p class="title"><?php echo htmlspecialchars($item['title']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta-with-counter">
    <section class="cta-section bg-size-cover"
        style="background-image: url(assets/img/cta-img/cta-section-bg-2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-content color-white text-center">
                        <div class="section-heading heading-white mb-20">
                            <span class="tagline">Make An Inquiry</span>
                            <h2 class="title">Looking For Any Doctor Or Nurses Join Us Now</h2>
                        </div>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloreue
                            laudantium totamrem aperiam eaque quae abillo
                        </p>
                        <ul class="cta-buttons d-sm-flex justify-content-center mt-40 flex-wrap">
                            <li class="mr-sm-2">
                                <a href="#" class="template-btn template-btn-tertiary wow fadeInUp"
                                    data-wow-delay="0.3s">
                                    Inquiry <i class="far fa-plus"></i>
                                </a>
                            </li>
                            <li class="mt-3 mt-sm-0">
                                <a href="#" class="template-btn template-btn-white wow fadeInUp"
                                    data-wow-delay="0.4s">
                                    Contact Us <i class="far fa-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-section">
        <div class="container">
            <div class="counter-inner-three bg-color-tertiary">
                <div class="row justify-content-between">
                    <div class="col-lg-auto col-md-5 col-sm-6">
                        <div class="counter-item counter-white">
                            <div class="counter-wrap">
                                <span class="counter">359</span>
                                <span class="suffix">+</span>
                            </div>
                            <h6 class="title">Professional Doctors</h6>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-5 col-sm-6">
                        <div class="counter-item counter-white">
                            <div class="counter-wrap">
                                <span class="counter">85</span>
                                <span class="suffix">k+</span>
                            </div>
                            <h6 class="title">Satisfied Our Clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-5 col-sm-6">
                        <div class="counter-item counter-white">
                            <div class="counter-wrap">
                                <span class="counter">863</span>
                                <span class="suffix">+</span>
                            </div>
                            <h6 class="title">Win International Awards</h6>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-5 col-sm-6">
                        <div class="counter-item counter-white">
                            <div class="counter-wrap">
                                <span class="counter">86</span>
                                <span class="suffix">k+</span>
                            </div>
                            <h6 class="title">4.9 Star Reviews</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="appointment-section">
    <div class="container container-1500">
        <div class="appointment-form-two style-two">
            <div class="appointment-image" style="background-image: url(assets/img/appointment/03.jpg);">
            </div>
            <div class="form-wrap">
                <div class="section-heading mb-50">
                    <span class="tagline">Make an Inquiry</span>
                    <h2 class="title">Fill-up The From</h2>
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
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.4s">
                                <input type="number+" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.6s">
                                <input type="text" placeholder="DL Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field wow fadeInLeft" data-wow-delay="0.7s">
                                <textarea id="message" type="message" placeholder="Write Message...."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field wow fadeInRight" data-wow-delay="0.8s">
                                <button type="submit" class="template-btn">
                                    Make an Inquiry <i class="far fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <section class="product-carousel-section section-gap">
    <div class="container">
        <div class="product-carousel-heading mb-70">
            <div class="row align-items-end">
                <div class="col-lg-6 col-sm-8">
                    <div class="section-heading">
                        <span class="tagline color-tertiary">Pharmacy Products</span>
                        <h2 class="title">Featured Products</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-4">
                    <div class="product-carousel-arrows"></div>
                </div>
            </div>
        </div>
        <div class="row product-carousel">
            <div class="col-lg-3">
                <div class="product-box product-box-bg">
                    <div class="thumbnail">
                        <img src="assets/img/products/07.png" alt="Image">
                    </div>
                    <div class="content">
                        <h5 class="title">
                            <a href="product-details.html">Vitamin Tablet</a>
                        </h5>
                        <span class="price">$29.87</span>
                    </div>
                    <div class="hover-action">
                        <ul class="action-btns">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-expand"></i></a></li>
                            <li><a href="#"><i class="far fa-repeat-alt"></i></a></li>
                        </ul>
                        <a href="#" class="add-to-cart">Add to cart <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-box product-box-bg">
                    <div class="thumbnail">
                        <img src="assets/img/products/09.png" alt="Image">
                    </div>
                    <div class="content">
                        <h5 class="title">
                            <a href="product-details.html">Covid Face Mask</a>
                        </h5>
                        <span class="price">$29.87</span>
                    </div>
                    <div class="hover-action">
                        <ul class="action-btns">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-expand"></i></a></li>
                            <li><a href="#"><i class="far fa-repeat-alt"></i></a></li>
                        </ul>
                        <a href="#" class="add-to-cart">Add to cart <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-box product-box-bg">
                    <div class="thumbnail">
                        <img src="assets/img/products/10.png" alt="Image">
                    </div>
                    <div class="content">
                        <h5 class="title">
                            <a href="product-details.html">Hand Sanitizer</a>
                        </h5>
                        <span class="price">$29.87</span>
                    </div>
                    <div class="hover-action">
                        <ul class="action-btns">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-expand"></i></a></li>
                            <li><a href="#"><i class="far fa-repeat-alt"></i></a></li>
                        </ul>
                        <a href="#" class="add-to-cart">Add to cart <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-box product-box-bg">
                    <div class="thumbnail">
                        <img src="assets/img/products/11.png" alt="Image">
                    </div>
                    <div class="content">
                        <h5 class="title">
                            <a href="product-details.html">Syrup Glass Bottles</a>
                        </h5>
                        <span class="price">$29.87</span>
                    </div>
                    <div class="hover-action">
                        <ul class="action-btns">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-expand"></i></a></li>
                            <li><a href="#"><i class="far fa-repeat-alt"></i></a></li>
                        </ul>
                        <a href="#" class="add-to-cart">Add to cart <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-box product-box-bg">
                    <div class="thumbnail">
                        <img src="assets/img/products/01.png" alt="Image">
                    </div>
                    <div class="content">
                        <h5 class="title">
                            <a href="product-details.html">Vitamin Tablet</a>
                        </h5>
                        <span class="price">$29.87</span>
                    </div>
                    <div class="hover-action">
                        <ul class="action-btns">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-expand"></i></a></li>
                            <li><a href="#"><i class="far fa-repeat-alt"></i></a></li>
                        </ul>
                        <a href="#" class="add-to-cart">Add to cart <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php
include('includes/footer.php');
?>
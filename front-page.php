<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codexlab
 */

get_header();
?>


<!-- main-area -->
<main>
    <!-- banner-area -->
    <section class="banner-area-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="banner-img-two">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner/h2_banner_img.png"
                            alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="banner-content-two">
                        <span class="sub-title">Hey, welcome to ScaleLabz</span>
                        <h2 class="title">Get Your Videos <span>Professionally Edited</span> From Us</h2>
                        <div class="banner-content-bottom">
                            <a href="#contact-us" class="btn">Contact Us <span></span></a>
                            <ul class="list-wrap">
                                <li><a href="#"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/icon/banner_icon01.svg"
                                            alt=""></a></li>
                                <li><a href="#"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/icon/banner_icon02.svg"
                                            alt=""></a></li>
                                <li><a href="#"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/icon/banner_icon03.svg"
                                            alt=""></a></li>
                                <li><a href="#"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/icon/banner_icon04.svg"
                                            alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-wrap-two">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner/h2_banner_shape01.png" alt=""
                class="rotateme">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner/h2_banner_shape02.png" alt=""
                class="ribbonRotate">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner/h2_banner_shape03.png" alt=""
                class="ribbonRotate">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner/h2_banner_shape04.png" alt="">
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- brand-area -->
    <div class="brand-area">
        <div class="container">
            <div class="row brand-active">
                <div class="col-12">
                    <div class="brand-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/brand_img01.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/brand_img02.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/brand_img03.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/brand_img04.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/brand_img05.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/brand_img06.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- about-area -->
    <section class="about-area-two" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-0 order-lg-2">
                    <div class="about-img-two text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/h2_about_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-two">
                        <div class="section-title white-title title-style-two mb-30">
                            <span class="sub-title">At ScaleLabz,</span>
                            <h2 class="title">WE CAN EDIT YOUR VIDEOS <br> AS PER YOUR REQUIREMENTS</h2>
                        </div>
                        <p>
                            Welcome! We are a team of expert video editors, deeply passionate and committed to our
                            craft. With over 6 years of collective experience in professional video editing, we possess
                            the expertise and insight required to elevate your project to new heights. Every phase of
                            the editing journey, from ideation to execution, is met with enthusiasm and collaboration.
                            At our company, we don't just edit videos; we sculpt narratives and bring visions to life.
                        </p>
                        <!-- <a href="contact.html">
                            <span class="arrow">
                                <img src="<?php //echo get_template_directory_uri() ?>/assets/img/icon/right_arrow.svg" alt=""></span>
                            <span class="text">Available jobs</span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-wrap">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/h2_about_shape01.png" alt=""
                class="shape-one" data-parallax='{"y" : 100 }'>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/h2_about_shape02.png" alt=""
                class="shape-two">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/h2_about_shape03.png" alt=""
                class="shape-three">
        </div>
    </section>
    <!-- about-area-end -->

    <!-- counter-area -->
    <div class="counter-area">
        <div class="container">
            <div class="counter-item-wrap">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <span class="count odometer" data-count="595"></span>
                            <p>Project <span>Completed</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <span class="count odometer" data-count="283"></span>
                            <p>Our Happy <span>Clients</span></p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-6">
                        <div class="counter-item">
                            <span class="count odometer" data-count="954"></span>
                            <p>Cup of <span>Coffee for Me</span></p>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <span class="count odometer" data-count="100">+</span>
                            <p>5 Stars Rated</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->

    <!-- services-area -->
    <section class="services-area-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title title-style-two white-title mb-65 text-center">
                        <span class="sub-title">What we do</span>
                        <h2 class="title">What services do we provide?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-icon-two">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/services_icon01.png"
                                alt="">
                        </div>
                        <div class="services-content-two">
                            <h2 class="title"><a href="services-details.html">Video Editing</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item-two active">
                        <div class="services-icon-two">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/services_icon02.png"
                                alt="">
                        </div>
                        <div class="services-content-two">
                            <h2 class="title"><a href="services-details.html">Content Creation</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-icon-two">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/services_icon03.png"
                                alt="">
                        </div>
                        <div class="services-content-two">
                            <h2 class="title"><a href="services-details.html">Social Media Management</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-icon-two">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/services_icon04.png"
                                alt="">
                        </div>
                        <div class="services-content-two">
                            <h2 class="title"><a href="services-details.html">Graphic Design</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- work-area -->
    <section class="work-area pt-110 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-img text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/work_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-content">
                        <div class="section-title title-style-two white-title mb-30">
                            <span class="sub-title">Working Steps</span>
                            <h2 class="title">Our Working Process</h2>
                        </div>
                        <div class="work-list">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/about_icon01.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Concept Creation</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/about_icon02.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Sketch Drawing</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/about_icon03.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Final Design</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="work-shape-wrap">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/work_shape01.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/work_shape02.png" alt=""
                data-parallax='{"y" : 80 }'>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/work_shape03.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/work_shape04.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/work_shape05.png" alt="">
        </div>
    </section>
    <!-- work-area-end -->

    <!-- project-area -->
    <!-- <section class="project-area-three" id="portfolio">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-10">
                    <div class="section-title title-style-two mb-90">
                        <span class="sub-title">Our Project</span>
                        <h2 class="title">Creative work.</h2>
                    </div>
                </div>
            </div>
            <div class="project-nav-wrap">
                <div class="row">
                    <div class="col-xl-2">
                        <div class="project-tab-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="website-tab" data-bs-toggle="tab"
                                        data-bs-target="#website" type="button" role="tab" aria-controls="website"
                                        aria-selected="true">Website</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="design-tab" data-bs-toggle="tab"
                                        data-bs-target="#design" type="button" role="tab" aria-controls="design"
                                        aria-selected="false">DesignBranding</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="app-tab" data-bs-toggle="tab" data-bs-target="#app"
                                        type="button" role="tab" aria-controls="app" aria-selected="false">DesignApp
                                        Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="branding-tab" data-bs-toggle="tab"
                                        data-bs-target="#branding" type="button" role="tab" aria-controls="branding"
                                        aria-selected="false">DesignBranding</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="website" role="tabpanel"
                                aria-labelledby="website-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img03.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img04.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img03.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img04.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="app-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img03.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img04.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img03.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="project-details.html">Hosting Website
                                                            Design</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...</p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="project-details.html"><img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/project/h3_project_img04.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="project-details.html">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-shape-wrap-two">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/h3_project_shape.png" alt="">
        </div>
    </section> -->
    <?php include get_template_directory() . '/template-parts/project/block.php'; ?>
    <!-- project-area-end -->

    <!-- testimonial-area -->
    <?php include get_template_directory() . '/template-parts/testimonial/block.php'; ?>
    <!-- testimonial-area-end -->

    <!-- contact-area -->
    <?php include get_template_directory() . '/template-parts/contact/block.php'; ?>
    <!-- contact-area-end -->
</main>
<!-- main-area-end -->


<?php
get_footer();

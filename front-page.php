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
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/hero-banner-img.png"
                            alt="ScaleLabz hero banner image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="banner-content-two">
                        <span class="sub-title">Hey, welcome to ScaleLabz</span>
                        <h2 class="title">Get Your Videos <span>Professionally Edited</span> From Us</h2>
                        <div class="banner-content-bottom">
                            <a href="#contact-us" class="btn">Contact Us <span></span></a>
                            <ul class="list-wrap">
                                <li>
                                    <a href="#">
                                        <!-- <img src="<?php //echo get_template_directory_uri() ?>/assets/img/icon/banner_icon01.svg"
                                            alt=""> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5"
                                            viewBox="0 0 448 512">
                                            <path fill="#acb5bc"
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <!-- <img src="<?php //echo get_template_directory_uri() ?>/assets/img/icon/banner_icon02.svg"
                                            alt=""> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5"
                                            viewBox="0 0 448 512">
                                            <path fill="#acb5bc"
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <!-- <img src="<?php //echo get_template_directory_uri() ?>/assets/img/icon/banner_icon03.svg"
                                            alt=""> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5"
                                            viewBox="0 0 448 512">
                                            <path fill="#acb5bc"
                                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM351.3 199.3v0c0 86.7-66 186.6-186.6 186.6c-37.2 0-71.7-10.8-100.7-29.4c5.3 .6 10.4 .8 15.8 .8c30.7 0 58.9-10.4 81.4-28c-28.8-.6-53-19.5-61.3-45.5c10.1 1.5 19.2 1.5 29.6-1.2c-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3c-9-6-16.4-14.1-21.5-23.6s-7.8-20.2-7.7-31c0-12.2 3.2-23.4 8.9-33.1c32.3 39.8 80.8 65.8 135.2 68.6c-9.3-44.5 24-80.6 64-80.6c18.9 0 35.9 7.9 47.9 20.7c14.8-2.8 29-8.3 41.6-15.8c-4.9 15.2-15.2 28-28.8 36.1c13.2-1.4 26-5.1 37.8-10.2c-8.9 13.1-20.1 24.7-32.9 34c.2 2.8 .2 5.7 .2 8.5z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/banner_icon04.svg"
                                            alt="">
                                    </a>
                                </li>
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
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/Logo.webp" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/ig-logo.png" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/DSA-ecommerce-Logo.webp" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/b81dc46-852e-6d46-e2fa-f7d38c741e5_Beloved_Holistic_Logo.webp"
                            alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/64a842e615596fc6585c90db_b2b-rocket-logo-blue-cropped-p-500.png"
                            alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="brand-item">
                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/8gzcr6RpGStvZFA2qRt4v6.jpg" alt="">
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
                            <p>Transform raw footage into polished, professional videos with our expert editing
                                services, tailored to enhance your visual storytelling.</p>
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
                            <p>Craft engaging and compelling content that resonates with your audience, driving
                                engagement and building your brand’s presence.
                            </p>
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
                            <p>Boost your online presence with strategic social media management, from content planning
                                to audience interaction, ensuring consistent and impactful communication.
                            </p>
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
                            <p>Create stunning visuals with our graphic design services, bringing your ideas to life
                                through innovative and eye-catching designs.
                            </p>
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
                            <h2 class="title">Our Working Process for Video Editing </h2>
                        </div>
                        <div class="work-list">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/select-video.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Concept Creation</h4>
                                        <p>We understand your vision and create a plan for your video.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/getting-pictures.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Receiving and Verifying Footage </h4>
                                        <p>We get all the video clips from you and check them to ensure they are ready
                                            for editing.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="https://scalelabz.com/wp-content/uploads/2024/07/video-trimming.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Editing and Quality Check</h4>
                                        <p>We start editing the video, piecing together the clips and adding effects. We
                                            then review the edited video to ensure it meets high-quality standards.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<https://scalelabz.com/wp-content/uploads/2024/07/pigeon.png"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Final Design and Submission</h4>
                                        <p>We deliver the polished, final video to you.</p>
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

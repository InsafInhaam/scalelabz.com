<?php
/**
 * Template Name: Portfolio
 */

get_header();
?>

<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="/">Homepage</a></li>
                <li><a href="/portfolios">Portfolio</a></li>
            </ul>
            <h1 class="mil-mb-60">Designing a <br> Better <span class="mil-thin">World Today</span></h1>
            <a href="#portfolio" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Our works</span>
            </a>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- portfolio -->
<style>
    .project-asrea-three{
        padding: 110px 0px;
    }

    .project-area-three .row {
        flex-wrap: wrap !important;
    }

    .project-area-three iframe {
        width: 100%;
        height: 200px;
    }

    .project-area-three iframe img {
        object-fit: contain;
    }

    .project-area-three .project-item-three {
        /* width: 33.3333%; */
        /* float: left; */
        box-sizing: border-box;
        padding: 30px 30px 0px;
    }

    .more-videos-btn {
        text-align: center;
        margin-top: 30px;
    }

    .project-items-wrap {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
    }

    /* .project-item-three {
        width: 32%;
        margin: 0 10px;
    } */
</style>

<section class="project-asrea-three" id="portfolio">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-10">
                <div class="section-title title-style-two mb-90">
                    <span class="sub-title"><?php _e('Our Project', 'scalelabz.com'); ?></span>
                    <h2 class="title"><?php _e('Creative work.', 'scalelabz.com'); ?></h2>
                </div>
            </div>
        </div>
        <div class="project-nav-wrap">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="website" role="tabpanel"
                            aria-labelledby="website-tab">
                            <div class="project-items-wrap">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'posts_per_page' => -1 // Only show 3 items
                                );
                                $portfolio_query = new WP_Query($args);
                                if ($portfolio_query->have_posts()):
                                    while ($portfolio_query->have_posts()):
                                        $portfolio_query->the_post();
                                        $portfolio_title = get_the_title();
                                        $portfolio_video_url = get_field('video_url');
                                        $portfolio_thumbnail = get_field('video_thumbnail');
                                        $portfolio_description = get_field('video_description');
                                        ?>
                                        <div class="project-item-three">
                                            <div class="project-content-three">
                                                <h2 class="title"><?php echo esc_html($portfolio_title); ?></h2>
                                                <p><?php echo esc_html($portfolio_description); ?></p>
                                            </div>
                                            <div class="project-thumb-three">
                                                <?php if ($portfolio_video_url): ?>
                                                    <a data-fancybox="gallery" href="<?php echo esc_url($portfolio_video_url); ?>">
                                                        <img src="<?php echo esc_url($portfolio_thumbnail['url']); ?>"
                                                            alt="<?php echo esc_attr($portfolio_title); ?>">
                                                    </a>
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/h3_project_img01.jpg"
                                                        alt="">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else:
                                    echo '<p>' . __('No portfolios found', 'scalelabz.com') . '</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                        <!-- Repeat the above block for other tabs: design, app, branding -->
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="more-videos-btn">
                        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn">
                            <?php _e('More Videos', 'scalelabz.com'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-shape-wrap-two">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/h3_project_shape.png" alt="">
    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                'slideShow',
                'share',
                'zoom',
                'fullScreen',
                'close'
            ],
            youtube: {
                controls: 0,
                showinfo: 0
            }
        });
    });
</script>
<!-- portfolio end -->

<?php
include get_template_directory() . '/template-parts/call-to-action.php';
?>

<?php
get_footer();

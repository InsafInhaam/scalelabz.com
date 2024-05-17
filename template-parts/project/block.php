<section class="project-area-three" id="portfolio">
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
                <div class="col-xl-2">
                    <div class="project-tab-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="website-tab" data-bs-toggle="tab"
                                    data-bs-target="#website" type="button" role="tab" aria-controls="website"
                                    aria-selected="true"><?php _e('Website', 'scalelabz.com'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="design-tab" data-bs-toggle="tab"
                                    data-bs-target="#design" type="button" role="tab" aria-controls="design"
                                    aria-selected="false"><?php _e('Design Branding', 'scalelabz.com'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="app-tab" data-bs-toggle="tab" data-bs-target="#app"
                                    type="button" role="tab" aria-controls="app"
                                    aria-selected="false"><?php _e('App Design', 'scalelabz.com'); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="branding-tab" data-bs-toggle="tab"
                                    data-bs-target="#branding" type="button" role="tab" aria-controls="branding"
                                    aria-selected="false"><?php _e('Branding', 'scalelabz.com'); ?></button>
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
                                    <?php
                                    $args = array(
                                        'post_type' => 'portfolio',
                                        'posts_per_page' => -1
                                    );
                                    $portfolio_query = new WP_Query($args);
                                    if ($portfolio_query->have_posts()) :
                                        while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                                            $portfolio_title = get_the_title();
                                            $portfolio_content = get_the_content();
                                            $portfolio_video_url = get_post_meta(get_the_ID(), 'portfolio_video_url', true);
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="project-item-three">
                                            <div class="project-content-three">
                                                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo esc_html($portfolio_title); ?></a></h2>
                                                <p><?php echo esc_html($portfolio_content); ?></p>
                                            </div>
                                            <div class="project-thumb-three">
                                                <?php if ($portfolio_video_url) : ?>
                                                    <iframe src="<?php echo esc_url($portfolio_video_url); ?>" width="640" height="480" allow="autoplay"></iframe>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/h3_project_img01.jpg" alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="project-details-btn">
                                                <a href="<?php the_permalink(); ?>"><?php _e('View Case Studies', 'scalelabz.com'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p>' . __('No portfolios found', 'scalelabz.com') . '</p>';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the above block for other tabs: design, app, branding -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-shape-wrap-two">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/h3_project_shape.png" alt="">
    </div>
</section>

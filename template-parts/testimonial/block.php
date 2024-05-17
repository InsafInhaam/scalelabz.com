<section class="testimonial-area-three" id="testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="section-title title-style-two white-title mb-45">
                    <h2 class="title">Some Words From <br> Our Customers</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-nav">
                    <button class="swiper-button-prev"></button>
                    <button class="swiper-button-next"></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container testimonial-active-three">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => -1
                        );
                        $testimonial_query = new WP_Query($args);
                        if ($testimonial_query->have_posts()):
                            while ($testimonial_query->have_posts()):
                                $testimonial_query->the_post();
                                $testimonial_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $testimonial_title = get_the_title();
                                $testimonial_content = get_the_content();
                                $testimonial_position = get_post_meta(get_the_ID(), 'testimonial_position', true);
                                ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-three">
                                        <div class="testimonial-thumb-three">
                                            <img src="<?php echo esc_url($testimonial_image); ?>"
                                                alt="<?php echo esc_attr($testimonial_title); ?>">
                                        </div>
                                        <div class="testimonial-content-three">
                                            <h4 class="title"><?php echo esc_html($testimonial_title); ?></h4>
                                            <span><?php echo esc_html($testimonial_position); ?></span>
                                            <p><?php echo esc_html($testimonial_content); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-swiper-pagination"></div>
    </div>
    <div class="testimonial-shape-wrap">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/testimonial_shape01.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/testimonial_shape02.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/testimonial_shape03.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/images/testimonial_shape04.png" alt="">
    </div>
</section>
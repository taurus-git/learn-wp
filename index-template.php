<?php
/**
 * Template Name: Home page template
 */
get_header(); ?>
    <main class="main-wrapper">
        <div class="main-banner">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/banner.png" alt="banner">
            <div class="banner-content">
                <div class="wrapper">
                    <div class="row">
                        <h1>Welcome to LearnCFDS</h1>
                        <p>Your source of Trading Tips and Market Analysis</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-section-green">
            <div class="wrapper">
                <div class="row">
                    <div id="banner-carousel" class="owl-carousel owl-theme">
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/cryptocurrency/">
                                <span class="circle-bg bg-1">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/network.png" alt="">
                                </span>
                                    <h4>Crypto<br>currency</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/forex-trading/">
                                <span class="circle-bg bg-2">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/001-report.png" alt="">
                                </span>
                                    <h4>FOREX<br>TRADING</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/trading-tips/">
                                <span class="circle-bg bg-3">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/003-book.png" alt="">
                                </span>
                                    <h4>TRADING<br>TIPS</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/share-cfds/">
                                <span class="circle-bg bg-4">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/work.png" alt="">
                                </span>
                                    <h4>SHARE<br>CFDS</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/cfds-trading/">
                                <span class="circle-bg bg-5">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/007-admin.png" alt="">
                                </span>
                                    <h4>CFDS<br>TRADING</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/technical-analysis/">
                                <span class="circle-bg bg-6">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/002-math.png" alt="">
                                </span>
                                    <h4>TECHNICAL<br>ANALYSIS</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/fundamental-analysis/">
                                <span class="circle-bg bg-7">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/006-research.png" alt="">
                                </span>
                                    <h4>FUNDAMENTAL<br>ANALYSIS</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/book-reviews/">
                                <span class="circle-bg bg-8">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/008-study.png" alt="">
                                </span>
                                    <h4>BOOK<br>REVIEWS</h4>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <a href="/videos/">
                                <span class="circle-bg bg-9">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/009-video-player.png" alt="">
                                </span>
                                    <h4>LEARN<br>VIDEOS</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-banners wrapper">
            <div class="title-row float-none">
                <div class="row">
                    <div class="div100">
                        <div class="title-divider"></div>
                        <h3>Top Articles</h3>
                        <div class="title-btn-div"><a href="/news/" class="title-btn">View all</a></div>
                    </div>
                </div>
            </div>
                <?php
                $args = array(
                    'posts_per_page' => '5',
                    'order' => 'DESC',
                    'orderby' => 'date',
                );

                $query = new WP_Query($args);
                $i = 0;

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        if ($i == 0) { ?>

                            <div class="cols-row">
                                <?php
                                get_template_part('index-parts/header-blog-left');
                        } elseif ($i == 1) { ?>
                                <div class="header-blog-rightfour div33">
                                    <?php
                                    get_template_part('index-parts/header-blog-rightfour'); ?>
                                </div>
                            </div>

                            <div class="cols-row">
                                <?php
                        } else {
                            get_template_part('index-parts/rightfour-below');
                        }
                        $i++;
                    }
                }
                wp_reset_postdata(); ?>
                            </div>
        </div>
        <div class="space-60"></div>
        <div class="top-articles wrapper">
            <div class="title-row float-none">
                <div class="row">
                    <div class="div100">
                        <div class="title-divider"></div>
                        <h3>Articles</h3>
                        <div class="title-btn-div"><a href="/news/" class="title-btn">View all</a></div>
                    </div>
                </div>
            </div>
            <div class="cols-row">
                <?php
                $args = array(
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => '6',
                    'offset'         => "5",
                );
                
                $query = new WP_Query($args);
                $i = 0;

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        if ($i <= 1) { ?>
                            <div class="header-blog-right ipad-50 div33">
                                <div class="header-blog-rightfour">
                                    <?php
                                    get_template_part('index-parts/header-blog-rightfour'); ?>
                                </div>
                            </div>
                        <?php
                        } else {
                            if ($i == 2) { ?>
                                <div class="block-list header-blog-right div33">
                            <?php
                            } get_template_part( 'index-parts/header-blog-right');

                        } $i++;?>

                    <?php
                    }
                }  ?>

                <?php
                wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="space-60"></div>
        <div class="top-book_reviews wrapper">
            <div class="title-row float-none">
                <div class="row">
                    <div class="div100">
                        <div class="title-divider"></div>
                        <h3>Book Review</h3>
                        <div class="title-btn-div"><a href="<?php echo get_permalink(318) ?>" class="title-btn">View
                                all</a></div>
                    </div>
                </div>
            </div>
            <div class="cols-row">
                <?php
                $args = array(
                    'category_name' => 'book-reviews',
                    'posts_per_page' => '5',
                );
                
                $query = new WP_Query($args);
                $i = 0;

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        if ($i == 0) {
                            get_template_part( 'index-parts/header-blog-left' ); ?>
                            <div class="block-list header-blog-right div33">
                            <?php
                        } else {
                            get_template_part( 'index-parts/header-blog-right' );
                        } $i++;
                    }
                } ?>
                            </div>
            <?php 
                wp_reset_postdata(); ?>
            </div>
        <div class="space-60"></div>
        <div class="wrapper">
            <div class="title-row float-none">
                <div class="row">
                    <div class="div100">
                        <div class="title-divider"></div>
                        <h3>Our Sponsors</h3>
                    </div>
                </div>
            </div>
            <div class="sponsor-slider">
                <div class="wrapper">
                    <div class="row">
                        <div class="carousel-center">
                            <div id="sponsor-carousel" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/file_240_128502400.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/sponsor-1.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/file_89_975064005.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/P500.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/sponsor-4.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/sponsor-5.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/sponsor-2.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/UNSET.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/09/easymarkets_ct.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
    </main>
<?php get_footer(); ?>
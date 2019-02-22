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
                // запрос
                $query = new WP_Query($args);
                $i = 0;

                // Цикл
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        if ($i == 0) { ?>
                            <!--2 блока вверху-->
                            <div class="cols-row">
                                <?php get_template_part('index-parts/header-blog-left'); ?>
                            <?php $i++;
                        } elseif ($i == 1) { ?>
                                <div class="header-blog-rightfour div33">
                                    <?php get_template_part('index-parts/header-blog-rightfour'); ?>
                                </div>
                            </div>

                            <!--3 блока снизу-->
                            <div class="cols-row">
                                <?php $i++;
                         } elseif ($i > 1) {
                            get_template_part('index-parts/header-blog-rightfour');
                        }
                    }
                } else {
                            // Постов не найдено
                        }// Возвращаем оригинальные данные поста. Сбрасываем $post.
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
                <div class="header-blog-right ipad-50 div33">
                    <div class="header-blog-rightfour">
                        <div class="row">
                            <div class="header-blog-rightfour-ct-1">
                                <a href="<?php echo get_site_url(); ?>/how-well-does-technical-analysis-work/" class="blog-featured-img">
                                    <img width="409" height="307" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/learncfed.jpg" class="attachment-409x351 size-409x351 wp-post-image" alt="Analysis" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2018/11/learncfed.jpg 1000w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/11/learncfed-300x225.jpg 300w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/11/learncfed-768x576.jpg 768w" sizes="(max-width: 409px) 100vw, 409px">							</a>
                                <div class="hover-content">
                                    <div class="date">November 9, 2018</div>
                                    <h3>
                                        <a href="<?php echo get_site_url(); ?>/how-well-does-technical-analysis-work/" class="blog-title">
                                            How well does technical analysis work?									</a>
                                    </h3>
                                    <p>Many CFD traders believe that technical analysis is the key to profiting with online trading...</p>
                                    <div class="button-holder text-center">
                                        <a href="<?php echo get_site_url(); ?>/how-well-does-technical-analysis-work/" class="btn-gren-bg">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-blog-right ipad-50 div33">
                    <div class="header-blog-rightfour">
                        <div class="row">
                            <div class="header-blog-rightfour-ct-1">
                                <a href="<?php echo get_site_url(); ?>/understanding-why-technical-indicators-fail/" class="blog-featured-img">
                                    <img width="409" height="273" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/10.10.18-lcfdsnews1.jpg" class="attachment-409x351 size-409x351 wp-post-image" alt="" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/10.10.18-lcfdsnews1.jpg 1000w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/10/10.10.18-lcfdsnews1-300x200.jpg 300w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/10/10.10.18-lcfdsnews1-768x512.jpg 768w" sizes="(max-width: 409px) 100vw, 409px">							</a>
                                <div class="hover-content">
                                    <div class="date">October 10, 2018</div>
                                    <h3>
                                        <a href="<?php echo get_site_url(); ?>/understanding-why-technical-indicators-fail/" class="blog-title">
                                            Understanding why technical indicators fail									</a>
                                    </h3>
                                    <p>Trading signals and indicators form part of the basis of technical analysis of trading trends...</p>
                                    <div class="button-holder text-center">
                                        <a href="<?php echo get_site_url(); ?>/understanding-why-technical-indicators-fail/" class="btn-gren-bg">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-list header-blog-right div33">
                    <div class="belowheader-blog-right">
                        <div class="row">
                            <ul class="related-post bs">
                                <li>
                                    <div class="related-featured-img">
                                        <a href="<?php echo get_site_url(); ?>/trading-the-1-minute-scalping-strategy/">
                                            <img width="81" height="81" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/LCFDS-NEWS-1-08.10.18-150x150.jpg" class="attachment-112x81 size-112x81 wp-post-image" alt="" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/LCFDS-NEWS-1-08.10.18-150x150.jpg 150w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/10/LCFDS-NEWS-1-08.10.18-60x60.jpg 60w" sizes="(max-width: 81px) 100vw, 81px">								</a>
                                    </div>
                                    <div class="related-featured-title">
                                        <div class="date">October 8, 2018</div>
                                        <h3>
                                            <a href="<?php echo get_site_url(); ?>/trading-the-1-minute-scalping-strategy/">
                                                Trading the 1-minute scalping...									</a>
                                        </h3>
                                        <p>Scalping is a popular term...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="belowheader-blog-right">
                        <div class="row">
                            <ul class="related-post bs">
                                <li>
                                    <div class="related-featured-img">
                                        <a href="<?php echo get_site_url(); ?>/the-martingale-strategy-trading-a-negative-progression-system/">
                                            <img width="81" height="81" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/04.10.18-LCFDS-1-150x150.jpg" class="attachment-112x81 size-112x81 wp-post-image" alt="" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/04.10.18-LCFDS-1-150x150.jpg 150w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/10/04.10.18-LCFDS-1-60x60.jpg 60w" sizes="(max-width: 81px) 100vw, 81px">								</a>
                                    </div>
                                    <div class="related-featured-title">
                                        <div class="date">October 4, 2018</div>
                                        <h3>
                                            <a href="<?php echo get_site_url(); ?>/the-martingale-strategy-trading-a-negative-progression-system/">
                                                The Martingale strategy: Trading...									</a>
                                        </h3>
                                        <p>Traders looking to improve their...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="belowheader-blog-right">
                        <div class="row">
                            <ul class="related-post bs">
                                <li>
                                    <div class="related-featured-img">
                                        <a href="<?php echo get_site_url(); ?>/trading-chart-patterns-the-dead-cat-bounce/">
                                            <img width="81" height="81" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/03.10.18-LCFDS-150x150.jpg" class="attachment-112x81 size-112x81 wp-post-image" alt="" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2018/10/03.10.18-LCFDS-150x150.jpg 150w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/10/03.10.18-LCFDS-60x60.jpg 60w" sizes="(max-width: 81px) 100vw, 81px">								</a>
                                    </div>
                                    <div class="related-featured-title">
                                        <div class="date">October 3, 2018</div>
                                        <h3>
                                            <a href="<?php echo get_site_url(); ?>/trading-chart-patterns-the-dead-cat-bounce/">
                                                Trading chart patterns: The...									</a>
                                        </h3>
                                        <p>The use of technical analysis...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="belowheader-blog-right">
                        <div class="row">
                            <ul class="related-post bs">
                                <li>
                                    <div class="related-featured-img">
                                        <a href="<?php echo get_site_url(); ?>/analyzing-the-divergence-of-indicators/">
                                            <img width="81" height="81" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/09/forex-3-150x150.jpg" class="attachment-112x81 size-112x81 wp-post-image" alt="" srcset="<?php echo get_site_url(); ?>/wp-content/uploads/2018/09/forex-3-150x150.jpg 150w, <?php echo get_site_url(); ?>/wp-content/uploads/2018/09/forex-3-60x60.jpg 60w" sizes="(max-width: 81px) 100vw, 81px">								</a>
                                    </div>
                                    <div class="related-featured-title">
                                        <div class="date">September 26, 2018</div>
                                        <h3>
                                            <a href="<?php echo get_site_url(); ?>/analyzing-the-divergence-of-indicators/">
                                                Analyzing the divergence of...									</a>
                                        </h3>
                                        <p>Trading signals are often spread...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                // запрос
                $query = new WP_Query($args);
                $i = 0;

                // Цикл
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        if ($i == 0) {
                            get_template_part( 'index-parts/header-blog-left' );
                            $i++; ?>
                            <div class="block-list header-blog-right div33">
                            <?php
                        } elseif ($i > 0) {
                            get_template_part( 'index-parts/header-blog-right' );
                        }
                    }
                } else {
                        // Постов не найдено
                    }?>
                            </div>
            <?php // Возвращаем оригинальные данные поста. Сбрасываем $post.
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
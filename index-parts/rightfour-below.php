<div class="header-blog-rightfour rightfour-below div33">
    <div class="row">
        <div class="bg-shadow">
            <a href="<?php echo get_permalink() ?>" class="blog-featured-img">
                <img width="409" height="196" src="<?php echo the_post_thumbnail_url('thumbnail'); ?>"
                     alt="<?php echo get_the_title() ?>">
            </a>
            <div class="bs-pad20">
                <div class="date"><?php the_time('F j, Y') ?></div>
                <h3>
                    <a href="<?php echo get_permalink() ?>" class="blog-title">
                        <?php echo get_the_title(); ?>
                    </a>
                </h3>
                <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="has-mask">

            <a href="<?php echo get_permalink() ?>" class="blog-featured-img">
                <img width="409" height="283" alt="<?php echo get_the_title()?>" src="<?php echo the_post_thumbnail_url('large');?>">
            </a>
        <div class="hover-content">
            <div class="date"><?php the_time('F j, Y') ?></div>
            <h3>
                <a href="<?php echo get_permalink() ?>" class="blog-title">
                    <?php echo wp_trim_words(get_the_title(), 8); ?>
                </a>
            </h3>
            <p><?php echo wp_trim_words(get_the_content(), 15); ?> </p>
            <div class="button-holder text-center">
                <a href="<?php echo esc_url(get_permalink()) ?>" class="btn-gren-bg">Read more</a>
            </div>
        </div>
    </div>
</div>
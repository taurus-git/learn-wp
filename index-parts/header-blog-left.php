<div class="header-blog-left div66">
    <div class="row">
        <div class="bg-shadow">
            <div class="div60">
                <a href="<?php echo get_permalink() ?>" class="blog-featured-img">
                   <img src="<?php echo the_post_thumbnail_url('large');?>" alt=<?php echo get_the_title() ?>>
                </a>
            </div>
            <div class="div40 bs-pad20">
                <div class="date"><?php the_time('F j, Y') ?></div>
                <h3>
                    <a href="<?php echo get_permalink() ?>"
                       class="blog-title">
                        <?php echo wp_trim_words(get_the_title(), 5); ?>
                    </a>
                </h3>
                <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                <div class="button-holder text-center">
                    <a href="<?php echo esc_url(get_permalink()) ?>"
                       class="btn-gren-bg">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
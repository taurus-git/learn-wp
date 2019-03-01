<div class="belowheader-blog-right">
    <div class="row">
        <ul class="related-post bs">
            <li>
                <div class="related-featured-img">
                    <a href="<?php echo get_permalink() ?>">
                        <?php
                        $size = array(
                            'width' => '112',
                            'height' => '81'
                        );
                        $default_attr = array(
                            $attachment_id = get_post_thumbnail_id(),
                            $image_attributes = wp_get_attachment_image_src( $attachment_id ),
                                'src'       => $image_attributes[0],
                        );
                        echo the_post_thumbnail( $size, $default_attr ); ?>
                    </a>
                </div>
                <div class="related-featured-title">
                    <div class="date"><?php the_time('F j, Y') ?></div>
                    <h3>
                        <a href="<?php echo get_permalink() ?>">
                            <?php echo wp_trim_words(get_the_title(), 4); ?> </a>
                    </h3>
                    <?php the_excerpt(); ?>
                </div>
            </li>
        </ul>
    </div>
</div>
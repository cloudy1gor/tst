<?php 
/**
 * Section with all posts
 * 
 */
?>

<section class="posts">
    <?php

    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => -1,
    ]);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
            <div class="posts__card">
                <?php if (has_post_thumbnail()) : ?>

                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>" style="max-width:300px">

                <?php else : ?>

                    <img src="img_avatar.png" alt="Avatar" style="width:100%">

                <?php endif; ?>

                <div class="posts__info">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>

                    <span>From ACF:</span>

                    <p><?php echo esc_html(get_field('post_info_text')) ?></p>
                    <img src="<?php echo get_field('post_info_image') ?>" alt="img">
                    <p><?php echo esc_html(get_field('post_info_conclusion')) ?></p>
                </div>

            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;
    ?>
</section>
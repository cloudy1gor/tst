<?php
/**
 * Shortcode to show user name.
 */

function custom_user_name_shortcode() {
    ob_start(); ?>
    <section class="user">
    <?php $current_user = wp_get_current_user(); ?>

        <?php if ( is_user_logged_in() ) { ?>

            <h2 class="user__name"><?php echo esc_html( $current_user->user_login ) ?></h2>

        <?php } else { ?>
            
            <a href="#" class="user__register">Sign in</a>

        <?php } ?>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_user_name', 'custom_user_name_shortcode');

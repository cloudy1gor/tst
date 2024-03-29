<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SavelievIhor
 */

?>

<?php get_header(); ?>

<main class="main">
    <div class="container">

    <?php echo do_shortcode('[custom_user_name]'); ?>

    <?php get_template_part( 'template-parts/section', 'posts' ); ?>

    </div>
</main><!-- #main -->

<?php  get_footer(); ?>

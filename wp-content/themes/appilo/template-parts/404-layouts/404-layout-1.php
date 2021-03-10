<?php
/**
 * 404 Layout One
 *
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Appilo
 */

?>

<section class="blog-list blog-style-two">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="has-right-sidebar">

                    <section class="error-404 not-found">
                        <h1><?php esc_attr_e('It seems there is empty' , 'appilo');?></h1>
                        <h1><?php esc_attr_e('404' , 'appilo');?></h1>
                    </section><!-- .error-404 -->

                 </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
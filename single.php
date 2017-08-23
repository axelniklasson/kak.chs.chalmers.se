<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */

 get_header(); ?>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php endwhile;
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

</div>

 <?php get_footer(); ?>

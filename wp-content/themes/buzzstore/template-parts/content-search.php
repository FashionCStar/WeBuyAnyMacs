<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buzz_Store
 */

?>


<div>
    <div class="col-md-3">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> ">
            <?php if (has_post_thumbnail()) { ?>
                <div class="pro_img">
                    <?php the_post_thumbnail() ?>
                </div>
            <?php } ?>
            <h2><?php the_title(); ?></h2>

            <?php woocommerce_template_loop_price(); ?>

        </a>

    </div><!-- #post-## -->
</div>
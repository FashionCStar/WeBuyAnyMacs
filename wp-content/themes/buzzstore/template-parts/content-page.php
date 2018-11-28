<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buzz_Store
 */

?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="askiran-smartwizard" class="carousel slide asksmartwizard">


                <div class="pro-outline2" id="pro_outline">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="basket_item_list">


                                <div class="wizard-inner">
                            <!--		--><?php
                            //			if ( has_post_thumbnail() ) {
                            //				the_post_thumbnail();
                            //			}
                            //		?>
                                    <div class="entry-content">
                                        <?php
                                            the_content( sprintf(
                                                /* translators: %s: Name of current post. */
                                                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'buzzstore' ), array( 'span' => array( 'class' => array() ) ) ),
                                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                            ) );

                                            wp_link_pages( array(
                                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'buzzstore' ),
                                                'after'  => '</div>',
                                            ) );
                                        ?>
                                    </div><!-- .entry-content -->

                                </div>
                            </div><!-- #post-## -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
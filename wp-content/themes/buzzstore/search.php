<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Buzz_Store
 */

get_header(); ?>

<?php do_action( 'buzzstore-breadcrumb-page' ); ?>

<div class="buzz-container buzz-clearfix">
	<div class="buzz-row buzz-clearfix">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 upper-page-title">
                                <div class="site-paging">

                                    <div class="category-filtering">
                                        <div class="lt_page_info">
                                            <?php
                                            $allsearch = new WP_Query("s=$s&showposts=-1");
                                            ?>
                                            Total Items: <?php echo $allsearch ->found_posts ?></div>
                                    </div>
                                </div>

                                <div class="row inner-products site-prolist openh2">
                                    <span id="ContentPlaceHolder1_dtpage" style="display:inline-block !important;width:100%;">

                                <?php if ( have_posts() ) :
					
                                    while ( have_posts() ) : the_post();

                                        /**
                                         * Run the loop for the search to output the results.
                                         * If you want to overload this in a child theme then include a file
                                         * called content-search.php and that will be used instead.
                                        */
                                        get_template_part( 'template-parts/content', 'search' );

                                    endwhile;

                                        the_posts_pagination(
                                            array(
                                                'prev_text' => esc_html__( 'Prev', 'buzzstore' ),
                                                'next_text' => esc_html__( 'Next', 'buzzstore' ),
                                            )
                                        );

                                    else :

                                        get_template_part( 'template-parts/content', 'none' );

                                    endif;
                                ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

				</main><!-- #main -->
			</div><!-- #primary -->

<!--			--><?php //get_sidebar('right'); ?>
			
		</div>

	</div>
</div>

<?php get_footer();